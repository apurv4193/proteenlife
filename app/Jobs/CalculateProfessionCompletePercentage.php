<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Helpers;
use App\Level4ProfessionProgress;
use App\Services\Level4Activity\Contracts\Level4ActivitiesRepository;
use App\Services\Teenagers\Contracts\TeenagersRepository;
use Config;

class CalculateProfessionCompletePercentage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $teenagerId;
    protected $professionId;
    protected $level4ActivitiesRepository;
    protected $teenagersRepository;
    
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($teenagerId, $professionId)
    {
        $this->teenagerId = $teenagerId;
        $this->professionId = $professionId;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(Level4ActivitiesRepository $level4ActivitiesRepository, TeenagersRepository $teenagersRepository)
    {
    	$this->teenagersRepository = $teenagersRepository;
        $this->level4ActivitiesRepository = $level4ActivitiesRepository;

        $basicQuestionArray = $this->level4ActivitiesRepository->getNoOfTotalQuestionsAttemptedQuestion($this->teenagerId, $this->professionId);
        $noOfTotalBasicQuestions = (isset($basicQuestionArray[0]->NoOfTotalQuestions) && $basicQuestionArray[0]->NoOfTotalQuestions != "") ? $basicQuestionArray[0]->NoOfTotalQuestions : 0;
        $noOfBasicAttemptedQuestions = (isset($basicQuestionArray[0]->NoOfAttemptedQuestions) && $basicQuestionArray[0]->NoOfAttemptedQuestions != "") ? $basicQuestionArray[0]->NoOfAttemptedQuestions : 0;
        $basicPercentage = ($noOfTotalBasicQuestions == 0) ? 0 : ($basicQuestionArray[0]->NoOfAttemptedQuestions * 100) / $basicQuestionArray[0]->NoOfTotalQuestions;
        
        $allIntermediateQuestion = $this->level4ActivitiesRepository->getQuestionTemplateForProfession($this->professionId);
        $totalIntermediateQuestion = $totalIntermediateAttemptedQuestion = 0;
        if($allIntermediateQuestion) {
            foreach($allIntermediateQuestion as $template) {
                $intermediateActivities = $this->level4ActivitiesRepository->getNoOfTotalIntermediateQuestionsAttemptedQuestion($this->teenagerId, $this->professionId, $template->gt_template_id);
                $totalIntermediateQuestion += (isset($intermediateActivities[0]->NoOfTotalQuestions) && $intermediateActivities[0]->NoOfTotalQuestions != "") ? $intermediateActivities[0]->NoOfTotalQuestions : 0;
                $totalIntermediateAttemptedQuestion += (isset($intermediateActivities[0]->NoOfAttemptedQuestions) && $intermediateActivities[0]->NoOfAttemptedQuestions != "") ? $intermediateActivities[0]->NoOfAttemptedQuestions : 0;
            }
        }
        $intermediatePercentage = ($totalIntermediateQuestion == 0) ? 0 : ($totalIntermediateAttemptedQuestion * 100) / $totalIntermediateQuestion;

        $allAdvanceRecords = $this->teenagersRepository->getLevel4AdvancePoint($this->teenagerId, $this->professionId);
        $approvedImageCount = $approvedVideoCount = $approvedDocumentCount = 0;
        if($allAdvanceRecords) {
            $approvedImageCount = ( isset($allAdvanceRecords['image']) && $allAdvanceRecords['image'] > 0 ) ? $allAdvanceRecords['image'] : 0;
            $approvedVideoCount = ( isset($allAdvanceRecords['video']) && $allAdvanceRecords['video'] > 0 ) ? $allAdvanceRecords['video'] : 0;
            $approvedDocumentCount = ( isset($allAdvanceRecords['document']) && $allAdvanceRecords['document'] > 0 ) ? $allAdvanceRecords['document'] : 0;
        }
        $totalDefaultAdvanceRecord = Config::get('constant.DEFAULT_TOTAL_ADVANCE_IMAGE_COUNT') + Config::get('constant.DEFAULT_TOTAL_ADVANCE_VIDEO_COUNT') + Config::get('constant.DEFAULT_TOTAL_ADVANCE_DOCUMENT_COUNT');
        $totalAttemptedAdvanceRecord = $approvedImageCount + $approvedVideoCount + $approvedDocumentCount;
        $advancePercentage = ($totalDefaultAdvanceRecord == 0) ? 0 : ($totalAttemptedAdvanceRecord * 100) / $totalDefaultAdvanceRecord;

        $level4DefaultQuestionCount = $noOfTotalBasicQuestions + $totalIntermediateQuestion + $totalDefaultAdvanceRecord;
        $level4AttemptedQuestionCount = $noOfBasicAttemptedQuestions + $totalIntermediateAttemptedQuestion + $totalAttemptedAdvanceRecord;
        $level4Percentage = ($level4DefaultQuestionCount == 0) ? 0 : ($level4AttemptedQuestionCount * 100) / $level4DefaultQuestionCount;

        $data = [];
        $data['level4_basic'] = $basicPercentage;
        $data['level4_intermediate'] = $intermediatePercentage;
        $data['level4_advance'] = $advancePercentage;
        $data['level4_total'] = $level4Percentage;
        $data['profession_id'] = $this->professionId;
        $data['teenager_id'] = $this->teenagerId;

        $objLevel4ProfessionProgress = new Level4ProfessionProgress;
        $saveTeenagerRecords = $objLevel4ProfessionProgress->saveTeenagerProfessionProgress($data);
        
        return $saveTeenagerRecords;
    }
}
