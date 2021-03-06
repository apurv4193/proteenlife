<?php
    $profession_outlook = $professionsData->professionHeaders->filter(function($item) {
        return $item->pfic_title == 'profession_outlook';
    })->first();
?>
                                    
<div class="block">
    <h4> Outlook</h4>
    @if(isset($profession_outlook->pfic_content) && !empty($profession_outlook->pfic_content))
        <p>{!!$profession_outlook->pfic_content!!}</p>
    @endif
</div>

<?php
    $AI_redundancy_threat = $professionsData->professionHeaders->filter(function($item) {
        return $item->pfic_title == 'ai_redundancy_threat';
    })->first();
?>

<div class="block">
    <h4> AI Redundancy Threat</h4>
    @if(isset($AI_redundancy_threat->pfic_content) && !empty($AI_redundancy_threat->pfic_content))
        <p>{!!$AI_redundancy_threat->pfic_content!!}</p>
    @endif
</div>

<div class="block">
    <h4>Subjects and Interests</h4>
    @if(isset($professionsData->professionSubject) && !empty($professionsData->professionSubject))
        <div class="img-list">
            <ul>                
                @forelse($professionsData->professionSubject as $professionSubject)
                
                    @if(count($professionSubject->subject) > 0)
                        @if($professionSubject->parameter_grade == 'M' || $professionSubject->parameter_grade == 'H')
                            <li>
                                <div class="logo-img">
                                <img src="{{ Storage::url($professionSubjectImagePath.$professionSubject->subject['ps_image']) }}" alt="{{$professionSubject->subject['ps_name']}}">
                                </div>
                                <a href="{{url('/teenager/interest')}}/it_{{$professionSubject->subject['ps_slug']}}"><span>{{$professionSubject->subject['ps_name']}}</span></a>                            
                            </li>
                        @endif
                    @endif                
                @empty
                @endforelse
                
            </ul>
        </div>
    @endif
</div>

<div class="block">
    <h4>Abilities</h4>
    @if(isset($professionsData->ability) && !empty($professionsData->ability))
        <div class="img-list">
            <ul>
                @foreach($professionsData->ability as $key => $value)
                    <li>
                        <img src="{{ $value['cm_image_url'] }}" alt="{{$value['cm_name']}}">
                        <a href="{{$value['cm_slug_url']}}"><span>{{$value['cm_name']}}</span></a>
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
</div>

<?php
    $profession_job_activities = $professionsData->professionHeaders->filter(function($item) {
        return $item->pfic_title == 'profession_job_activities';
    })->first();
?>

<div class="block">
    <h4>Activities</h4>
    @if(isset($profession_job_activities->pfic_content) && !empty($profession_job_activities->pfic_content))
        {!!$profession_job_activities->pfic_content!!}
    @endif
</div>

<?php
    $profession_workplace = $professionsData->professionHeaders->filter(function($item) {
        return $item->pfic_title == 'profession_workplace';
    })->first();
?>

<div class="block">
    <h4>Work Place</h4>
    @if(isset($profession_workplace->pfic_content) && !empty($profession_workplace->pfic_content))
        {!!$profession_workplace->pfic_content!!}
    @endif
</div>

<?php
    $profession_skills = $professionsData->professionHeaders->filter(function($item) {
        return $item->pfic_title == 'profession_skills';
    })->first();
?>

<div class="block">
    <h4>Skills</h4>
    @if(isset($profession_skills->pfic_content) && !empty($profession_skills->pfic_content))
        {!!$profession_skills->pfic_content!!}
    @endif
</div>

<?php
    $profession_personality = $professionsData->professionHeaders->filter(function($item) {
        return $item->pfic_title == 'profession_personality';
    })->first();
?>

<div class="block">
    <h4>Personality</h4>
    @if(isset($profession_personality->pfic_content) && !empty($profession_personality->pfic_content))
        {!!$profession_personality->pfic_content!!}
    @endif
</div>

<?php
    $profession_education_path = $professionsData->professionHeaders->filter(function($item) {
        return $item->pfic_title == 'profession_education_path';
    })->first();
?>
<div class="block">
    <h4>Education</h4>
    @if(isset($profession_education_path->pfic_content) && !empty($profession_education_path->pfic_content))
    <p>{!!$profession_education_path->pfic_content!!}</p>
    @endif
    <div id="education_chart"></div>  
</div>

<?php
    $edu_stream = $professionsData->professionHeaders->filter(function($item) {
        return $item->pfic_title == 'edu_stream';
    })->first();

    if(isset($edu_stream->pfic_content) && !empty($edu_stream->pfic_content)){
        $collegeList = explode('#', strip_tags($edu_stream->pfic_content));
    }
?>
<div class="block sec-tags">
    <div class="unbox-btn">
        <?php
            if ($instituteRemainingDays && $instituteRemainingDays > 0) {
                $instituteUrl = "url('teenager/institute')";
            } else {
                $instituteUrl = "javascript:void(0);";
            }
        ?>
        @if ($instituteComponent && !empty($instituteComponent))
        <?php
        $defaultFilter = "";
        if(isset($collegeList) && count($collegeList)>0){
            $defaultFilter = '?speciality='.$collegeList[0];
        }
        ?>
        <a id="institute_activity" href="{{ ($instituteRemainingDays && $instituteRemainingDays > 0) ? url('teenager/institute').$defaultFilter : 'javascript:void(0) '}}" title="Find College" @if($instituteRemainingDays == 0) onclick="getCoinsConsumptionDetails('{{$instituteComponent->pc_required_coins}}', '{{$instituteComponent->pc_element_name}}', '{{$instituteRemainingDays}}');" @endif class="btn-primary">
            <span class="unbox-me">College Finder</span>
            <span class="coins-outer institute_coins">
                <span class="coins"></span> {{ ($instituteRemainingDays && $instituteRemainingDays > 0) ? $instituteRemainingDays . ' days left' : $instituteComponent->pc_required_coins }}
            </span>
        </a>
        @else
            <a id="" href="#" title="Find College" class="btn-primary">
                <span class="unbox-me">College Finder</span>
                <span class="coins-outer">
                    <span class="coins"></span> 0
                </span>
            </a>
        @endif
    </div>

    @if(isset($edu_stream->pfic_content) && !empty($edu_stream->pfic_content))
    <ul class="tag-list institute_list">
        <?php 
        $insClass = '';
        if ($instituteRemainingDays == 0) {
            $insClass = "disabled";
        } ?>
        @forelse($collegeList as $key => $value)
            <li class="{{ $insClass }}"><a href="{{ url('teenager/institute') }}?speciality={{$value}}" title="{{$value}}">{{$value}}</a></li>
        @empty
        @endforelse
    </ul>
    
    @endif
</div>

<div class="block">
    <h4>Certifications</h4>
    @if(isset($professionsData->professionCertificates) && !empty($professionsData->professionCertificates))
        <div class="img-list certificate-list">
            <ul>
                @forelse($professionsData->professionCertificates as $professionCertificate)
                @if(count($professionCertificate->certificate) > 0)
                <li>
                    <div class="logo-img">
                        <img src="{{ Storage::url($professionCertificationImagePath.$professionCertificate->certificate['pc_image']) }}" alt="compatia logo">
                    </div>
                    <span>{{ (isset($professionCertificate->certificate['pc_name']) && !empty($professionCertificate->certificate['pc_name'])) ? $professionCertificate->certificate['pc_name'] : '' }}</span>
                </li>
                @endif
                
                @empty
                @endforelse
            </ul>
        </div>
    @endif
</div>

<?php
    $profession_licensing = $professionsData->professionHeaders->filter(function($item) {
        return $item->pfic_title == 'profession_licensing';
    })->first();
?>
<div class="block">
    <h4>Licensing</h4>
    @if(isset($profession_licensing->pfic_content) && !empty($profession_licensing->pfic_content))
        <p>{!!$profession_licensing->pfic_content!!}</p>
    @endif
</div>

<?php
    $profession_experience = $professionsData->professionHeaders->filter(function($item) {
        return $item->pfic_title == 'profession_experience';
    })->first();
?>
<div class="block">
    <h4>Experience</h4>
    @if(isset($profession_experience->pfic_content) && !empty($profession_experience->pfic_content))
        {!!strip_tags($profession_experience->pfic_content)!!}
    @endif
</div>

<?php
    $profession_growth_path = $professionsData->professionHeaders->filter(function($item) {
        return $item->pfic_title == 'profession_growth_path';
    })->first();
?>
<div class="block">
    <h4>Growth Path</h4>
    @if(isset($profession_growth_path->pfic_content) && !empty($profession_growth_path->pfic_content))
    <p>{!!$profession_growth_path->pfic_content!!}</p>
    @endif
</div>

<?php
    $salary_range = $professionsData->professionHeaders->filter(function($item) {
        return $item->pfic_title == 'salary_range';
    })->first();
?>
<div class="block">
    <h4>Salary Range</h4>
    @if(isset($salary_range->pfic_content) && !empty($salary_range->pfic_content))
        <p>{!!$salary_range->pfic_content!!}</p>
    @endif
</div>

<?php
    $profession_bridge = $professionsData->professionHeaders->filter(function($item) {
        return $item->pfic_title == 'profession_bridge';
    })->first();
?>
<div class="block">
    <h4>Apprenticeships</h4>
    @if(isset($profession_bridge->pfic_content) && !empty($profession_bridge->pfic_content))
        <p>{!!$profession_bridge->pfic_content!!}</p>
    @endif
</div>

<?php
    $trends_infolinks_usa = $professionsData->professionHeaders->filter(function($item) {
        return $item->pfic_title == 'trends_infolinks';
    })->first();
?>
<div class="block">
    <h4>General Information and Links</h4>
    @if(isset($trends_infolinks_usa->pfic_content) && !empty($trends_infolinks_usa->pfic_content))
        <p>{!!$trends_infolinks_usa->pfic_content!!}</p>
    @endif
</div>