<?php

return [

    'ACTIVE_FLAG' => '1',
    'INACTIVE_FLAG' => '2',
    'DELETED_FLAG' => '3',
    'DEFAULT_AWS' => "https://s3.ap-south-1.amazonaws.com/".env('AWS_BUCKET', "proteenlive-old")."/",
    'TEEN_ORIGINAL_IMAGE_UPLOAD_PATH' => 'uploads/teenager/original/',
    'TEEN_THUMB_IMAGE_UPLOAD_PATH' => 'uploads/teenager/thumb/',
    'TEEN_PROFILE_IMAGE_UPLOAD_PATH' => 'uploads/teenager/profile/',
    'BADGES_THUMB_IMAGE_UPLOAD_PATH' => 'frontend/images/badges/thumb/',
    'BADGES_ORIGINAL_IMAGE_UPLOAD_PATH' => 'frontend/images/badges/original/',
    'TEEN_THUMB_IMAGE_HEIGHT' => '300',
    'TEEN_THUMB_IMAGE_WIDTH' => '300',

    'LEVEL4_MINIMUM_POINTS_REQUIREMENTS' => '5999',
    'LEVEL4_DEDUCT_POINTS' => '1',
    'LEVEL4_POINTS_FOR_QUESTION' => '30',
    'LEVEL4_TIMER_FOR_QUESTION' => '30',
    'LEVEL4_NO_OF_QUESTION' => '5',
    'EXTRA_QUESTION_DESCRIPTION' => '120',
    'TOTAL_L4_ADVANCE_POINT' => '1500',
    'ADMIN_RECORD_PER_PAGE' => '15',
    "AUDIT_ACTION_CREATE" => "CREATE",
    "AUDIT_ACTION_READ" => "READ",
    "AUDIT_ACTION_UPDATE" => "UPDATE",
    "AUDIT_ACTION_DELETE" => "DELETE",
    "AUDIT_ACTION_LOGIN" => "LOGIN",
    "AUDIT_ACTION_LOGOUT" => "LOGOUT",
    "AUDIT_ADMIN_USER_TYPE" => "1",
    "AUDIT_ORIGIN_ANDROID" => "1",
    "AUDIT_ORIGIN_IOS" => "2",
    "AUDIT_ORIGIN_WEB" => "3",

    "PROCOINS_FACTOR_L1" => 'PROCOINS_FACTOR_L1',
    "PROCOINS_FACTOR_L2" => 'PROCOINS_FACTOR_L2',
    "PROCOINS_FACTOR_L3" => 'PROCOINS_FACTOR_L3',
    "PROCOINS_FACTOR_L1_ICON" => 'PROCOINS_FACTOR_L1_ICON', 

    'CONTACT_PHOTO_ORIGINAL_IMAGE_UPLOAD_PATH' => 'uploads/sponsor/contact_photo/original/',
    'CONTACT_PHOTO_THUMB_IMAGE_UPLOAD_PATH' => 'uploads/sponsor/contact_photo/thumb/',
    'CONTACT_PHOTO_THUMB_IMAGE_HEIGHT' => '300',
    'CONTACT_PHOTO_THUMB_IMAGE_WIDTH' => '300',

    'SPONSOR_ORIGINAL_IMAGE_UPLOAD_PATH' => 'uploads/sponsor/sponsor_logo/original/',
    'SPONSOR_THUMB_IMAGE_UPLOAD_PATH' => 'uploads/sponsor/sponsor_logo/thumb/',
    'SPONSOR_THUMB_IMAGE_HEIGHT' => '300',
    'SPONSOR_THUMB_IMAGE_WIDTH' => '300',

    'SCHOOL_ORIGINAL_IMAGE_UPLOAD_PATH' => 'uploads/school/school_logo/original/',
    'SCHOOL_THUMB_IMAGE_UPLOAD_PATH' => 'uploads/school/school_logo/thumb/',
    'SCHOOL_THUMB_IMAGE_HEIGHT' => '300',
    'SCHOOL_THUMB_IMAGE_WIDTH' => '300',

    'CONTACT_PERSON_ORIGINAL_IMAGE_UPLOAD_PATH' => 'uploads/school/contact_photo/original/',
    'CONTACT_PERSON_THUMB_IMAGE_UPLOAD_PATH' => 'uploads/school/contact_photo/thumb/',
    'CONTACT_PERSON_THUMB_IMAGE_HEIGHT' => '300',
    'CONTACT_PERSON_THUMB_IMAGE_WIDTH' => '300',

    'PROFESSION_ORIGINAL_IMAGE_UPLOAD_PATH' => 'uploads/profession/original/',
    'PROFESSION_THUMB_IMAGE_UPLOAD_PATH' => 'uploads/profession/thumb/',
    'PROFESSION_ORIGINAL_VIDEO_UPLOAD_PATH' => 'uploads/profession/video/',
    'PROFESSION_THUMB_IMAGE_HEIGHT' => '300',
    'PROFESSION_THUMB_IMAGE_WIDTH' => '300',
    'COUPON_ORIGINAL_IMAGE_UPLOAD_PATH' => 'uploads/coupon/original/',
    'COUPON_THUMB_IMAGE_UPLOAD_PATH' => 'uploads/coupon/thumb/',
    'COUPON_THUMB_IMAGE_HEIGHT' => '300',
    'COUPON_THUMB_IMAGE_WIDTH' => '300',
    'BASKET_ORIGINAL_IMAGE_UPLOAD_PATH' => 'uploads/basket/original/',
    'BASKET_THUMB_IMAGE_UPLOAD_PATH' => 'uploads/basket/thumb/',
    'BASKET_ORIGINAL_VIDEO_UPLOAD_PATH' => 'uploads/basket/video/',
    'BASKET_THUMB_IMAGE_HEIGHT' => '300',
    'BASKET_THUMB_IMAGE_WIDTH' => '300',
    'TEENAGER_RESET_EMAIL_TEMPLATE_NAME' => 'teenagerpassword',
    'PARENT_RESET_EMAIL_TEMPLATE_NAME' => 'parentpassword',
    'SPONSOR_RESET_EMAIL_TEMPLATE_NAME' => 'sponsorpassword',
    'TEENAGER_VAIRIFIED_EMAIL_TEMPLATE_NAME' => 'teenagervarified',
    'PARENT_VAIRIFIED_EMAIL_TEMPLATE_NAME' => 'parentverified',
    'SCHOOL_RESET_EMAIL_TEMPLATE_NAME' => 'schoolpassword',
    'SCHOOL_VAIRIFIED_EMAIL_TEMPLATE_NAME' => 'schoolvarified',

    'CARTOON_ORIGINAL_IMAGE_UPLOAD_PATH' => 'uploads/cartoon/original/',
    'CARTOON_THUMB_IMAGE_UPLOAD_PATH' => 'uploads/cartoon/thumb/',
    'CARTOON_THUMB_IMAGE_HEIGHT' => '300',
    'CARTOON_THUMB_IMAGE_WIDTH' => '300',
    'HUMAN_ORIGINAL_IMAGE_UPLOAD_PATH' => 'uploads/human/original/',
    'HUMAN_THUMB_IMAGE_UPLOAD_PATH' => 'uploads/human/thumb/',
    'HUMAN_THUMB_IMAGE_HEIGHT' => '300',
    'HUMAN_THUMB_IMAGE_WIDTH' => '300',
    'PASSWORD_RESET_REQUEST_VALIDITY_DAYS' => '30',
    'LEVEL1_ACTIVITY_ORIGINAL_IMAGE_UPLOAD_PATH' => 'uploads/level1Activity/original/',
    'LEVEL1_ACTIVITY_THUMB_IMAGE_UPLOAD_PATH' => 'uploads/level1Activity/thumb/',
    'LEVEL2_ACTIVITY_ORIGINAL_IMAGE_UPLOAD_PATH' => 'uploads/level2Activity/original/',
    'LEVEL2_ACTIVITY_THUMB_IMAGE_UPLOAD_PATH' => 'uploads/level2Activity/thumb/',
    'LEVEL1_ACTIVITY_THUMB_IMAGE_HEIGHT' => '300',
    'LEVEL1_ACTIVITY_THUMB_IMAGE_WIDTH' => '300',
    'LEVEL2_ACTIVITY_THUMB_IMAGE_HEIGHT' => '300',
    'LEVEL2_ACTIVITY_THUMB_IMAGE_WIDTH' => '300',
    'LEVEL1_ID' => 1,
    'LEVEL2_ID' => 2,
    'LEVEL3_ID' => 3,
    'LEVEL4_ID' => 4,
    'LEVEL2_TOTAL_TIME' => 2700,
    'LEVEL2_SECTION_1' => 1,
    'LEVEL2_SECTION_2' => 2,
    'LEVEL2_SECTION_3' => 3,
    'RELATION_ICON_ORIGINAL_IMAGE_UPLOAD_PATH' => 'uploads/relation/original/',
    'RELATION_ICON_THUMB_IMAGE_UPLOAD_PATH' => 'uploads/relation/thumb/',
    'RELATION_THUMB_IMAGE_HEIGHT' => '300',
    'RELATION_THUMB_IMAGE_WIDTH' => '300',
    'APPTITUDE_ORIGINAL_IMAGE_UPLOAD_PATH' => 'uploads/apptitude/original/',
    'APPTITUDE_THUMB_IMAGE_UPLOAD_PATH' => 'uploads/apptitude/thumb/',
    'APPTITUDE_THUMB_IMAGE_HEIGHT' => '686',
    'APPTITUDE_THUMB_IMAGE_WIDTH' => '1200',
    'MI_ORIGINAL_IMAGE_UPLOAD_PATH' => 'uploads/multipleIntelligence/original/',
    'MI_THUMB_IMAGE_UPLOAD_PATH' => 'uploads/multipleIntelligence/thumb/',
    'MI_THUMB_IMAGE_HEIGHT' => '686',
    'MI_THUMB_IMAGE_WIDTH' => '1200',
    'INTEREST_ORIGINAL_IMAGE_UPLOAD_PATH' => 'uploads/interest/original/',
    'INTEREST_THUMB_IMAGE_UPLOAD_PATH' => 'uploads/interest/thumb/',
    'INTEREST_THUMB_IMAGE_HEIGHT' => '686',
    'INTEREST_THUMB_IMAGE_WIDTH' => '1200',
    'PERSONALITY_ORIGINAL_IMAGE_UPLOAD_PATH' => 'uploads/personality/original/',
    'PERSONALITY_THUMB_IMAGE_UPLOAD_PATH' => 'uploads/personality/thumb/',
    'PERSONALITY_THUMB_IMAGE_HEIGHT' => '686',
    'PERSONALITY_THUMB_IMAGE_WIDTH' => '1200',
    'LEVEL1_QUESTION_OPTION_IMAGE_PATH' => 'frontend/images/',
    'LEVEL3_PROFESSION_POINTS' => 50,
    'LEVEL3_BASKET_VIDEO_POINTS' => 25,
    'LEVEL3_PROFESSION_VIDEO_POINTS' => 50,
    'LEVEL1_ICON_SELECTION_POINTS' => 30,
    'PARENT_ORIGINAL_IMAGE_UPLOAD_PATH' => 'uploads/parent/original/',
    'PARENT_THUMB_IMAGE_UPLOAD_PATH' => 'uploads/parent/thumb/',
    'PARENT_THUMB_IMAGE_HEIGHT' => '200',
    'PARENT_THUMB_IMAGE_WIDTH' => '200',
    'PARENT_TEENAGER_VAIRIFIED_EMAIL_TEMPLATE_NAME' => 'parentteenverified',
    'GET_PROFESSION_IMAGES' => 'frontend/images/Professions/',
    'HINT_ORIGINAL_IMAGE_UPLOAD_PATH' => 'uploads/hint/original/',
    'HINT_THUMB_IMAGE_UPLOAD_PATH' => 'uploads/hint/thumb/',
    'HINT_THUMB_IMAGE_HEIGHT' => '300',
    'HINT_THUMB_IMAGE_WIDTH' => '300',
    'DELETE_IMAGE' => 'deletimage',
    'SPONSOR_VAIRIFIED_EMAIL_TEMPLATE_NAME' => 'sponsorvarified',
    'SCHOOL_VAIRIFIED_EMAIL_TEMPLATE_NAME' => 'schoolvarified',
    'STUDENT_BULK_IMPORT' => 'schoolbulkimport',
    'SPONSOR_ADS_ORIGINAL_IMAGE_UPLOAD_PATH' => 'uploads/sponsorads/original/',
    'SPONSOR_ADS_THUMB_IMAGE_UPLOAD_PATH' => 'uploads/sponsorads/thumb/',
    'GENERIC_ADS_ORIGINAL_IMAGE_UPLOAD_PATH' => 'uploads/genericads/original/',
    'GENERIC_ADS_THUMB_IMAGE_UPLOAD_PATH' => 'uploads/genericads/thumb/',
    'GENERIC_THUMB_IMAGE_HEIGHT' => '50',
    'GENERIC_THUMB_IMAGE_WIDTH' => '730',

    'SA_ORIGINAL_IMAGE_UPLOAD_PATH' => 'uploads/sponsoractivity/origional/',
    'SA_THUMB_IMAGE_UPLOAD_PATH' => 'uploads/sponsoractivity/thumb/',
    'SA_THUMB_IMAGE_HEIGHT' => '300',
    'SA_THUMB_IMAGE_WIDTH' => '300',
    'schoolBulkImport' => 'SchoolBulkImport',
    'ACHIEVEMENT_META_ID'=> 1,
    'EDUCATION_META_ID'=> 2,
    'PARENT_TEEN_PAIR_FROM_PARENT_SECTION' => 'parentteenpair',
    'LEVEL4_INTERMEDIATE_QUESTION_ORIGINAL_IMAGE_UPLOAD_PATH' => 'uploads/intermediate/question/original/',
    'LEVEL4_INTERMEDIATE_QUESTION_THUMB_IMAGE_UPLOAD_PATH' => 'uploads/intermediate/question/thumb/',
    'LEVEL4_INTERMEDIATE_QUESTION_THUMB_IMAGE_HEIGHT' => '350',
    'LEVEL4_INTERMEDIATE_QUESTION_THUMB_IMAGE_WIDTH' => '350',
    'LEVEL4_INTERMEDIATE_ANSWER_ORIGINAL_IMAGE_UPLOAD_PATH' => 'uploads/intermediate/answer/original/',
    'LEVEL4_INTERMEDIATE_ANSWER_THUMB_IMAGE_UPLOAD_PATH' => 'uploads/intermediate/answer/thumb/',
    'LEVEL4_INTERMEDIATE_ANSWER_THUMB_IMAGE_HEIGHT' => '350',
    'LEVEL4_INTERMEDIATE_ANSWER_THUMB_IMAGE_WIDTH' => '350',
    'LEVEL4_INTERMEDIATE_RESPONSE_ORIGINAL_IMAGE_UPLOAD_PATH' => 'uploads/intermediate/response/original/',
    'LEVEL4_INTERMEDIATE_RESPONSE_THUMB_IMAGE_UPLOAD_PATH' => 'uploads/intermediate/response/thumb/',
    'LEVEL4_INTERMEDIATE_RESPONSE_THUMB_IMAGE_HEIGHT' => '350',
    'LEVEL4_INTERMEDIATE_RESPONSE_THUMB_IMAGE_WIDTH' => '350',
    'CONSUME_COUPON_TEMPLATE' => 'consume-coupon',
    'LEVEL1_PARTA_POPUP' => 1,
    'LEVEL1_PARTB_POPUP' => 2,
    'LEVEL2_POPUP' => 3,
    'LEVEL3_BASKET' => 4,
    'LEVEL3_BASKET_PROFESSION' => 5,
    'LEVEL3_PROFESSION_DETAIL' => 6,
    'PAYMENT_REVIEW_TEMPLATE' => 'user-payment-review',
    'PAYMENT_APPROVED_TEMPLATE' => 'user-payment-approved',
    'ADMIN_PAYMENT_NOTIFICATION_TEMPLATE' => 'admin-payment-notification',
    'LEVEL4_ADVANCE_ORIGINAL_IMAGE_UPLOAD_PATH' => 'uploads/advance/original/',
    'LEVEL4_ADVANCE_THUMB_IMAGE_UPLOAD_PATH' => 'uploads/advance/thumb/',
    'LEVEL4_ADVANCE_THUMB_IMAGE_HEIGHT' => '300',
    'LEVEL4_ADVANCE_THUMB_IMAGE_WIDTH' => '300',
    'ADVANCE_IMAGE_TYPE' => 3,
    'ADVANCE_VIDEO_TYPE' => 1,
    'ADVANCE_DOCUMENT_TYPE' => 2,
    'USER_SUBMITTED_ADVANCE_TASK' => 'user-advance-activity-submitted',
    'CONCEPT_ORIGINAL_IMAGE_UPLOAD_PATH' => 'uploads/concept/original/',
    'LOGIN_INTRO_POPUP' => 7,
    'PARENT_TEEN_SECOND_TIME' => 'parentteenverifiedsecond',
    'LEVEL1A_PROGRESS' => '77.5',
    'LEVEL1B_PROGRESS' => '22.5',
    'FACEBOOK_CLIENT_ID' => '146901802433877',

    'CERTIFICATE_PATH' => 'certificate/proteen.pem',
    'USER_TASK_REVIEW_TEMPLATE' => 'user-task-review',

    'RECORD_PER_PAGE' => 10,
    'NOMATCH_MIN_RANGE' => 0,
    'NOMATCH_MAX_RANGE' => 30,
    'MODERATE_MIN_RANGE' => 31,
    'MODERATE_MAX_RANGE' => 60,
    'MATCH_MIN_RANGE' => 61,
    'MATCH_MAX_RANGE' => 100,

    'USER_L4_VIDEO_POINTS' => 500,
    'USER_L4_PHOTO_POINTS' => 250,
    'USER_L4_DOCUMENT_POINTS' => 750,
    'USER_L4_ONE_PHOTO_POINTS' => 50,

    'LEARNING_STYLE_ORIGINAL_IMAGE_UPLOAD_PATH' => 'uploads/learningStyle/original/',
    'LEARNING_STYLE_THUMB_IMAGE_UPLOAD_PATH' => 'uploads/learningStyle/thumb/',
    'LEARNING_STYLE_THUMB_IMAGE_HEIGHT' => '300',
    'LEARNING_STYLE_THUMB_IMAGE_WIDTH' => '300',

    'INVOICE_UPLOAD_PATH' => 'uploads/invoice/',
    'FROM_MAIL_ID' => 'info@proteenlife.com',
    'GIFT_COINS_PROCESS' => 'Gift coins process complete Successfully',
    'PROMISE_PLUS' => 'PROMISE Plus',
    'LEARNING_STYLE' => 'Learning Guidance',
    'BASIC_REQUIRED_COINS' => '1850000',
    'ADVANCE_ACTIVITY' => 'Advance Activity ProCoins',

    'LS_LOW_MIN_RANGE' => 0,
    'LS_LOW_MAX_RANGE' => 30,
    'LS_MEDIUM_MIN_RANGE' => 31,
    'LS_MEDIUM_MAX_RANGE' => 60,
    'LS_HIGH_MIN_RANGE' => 61,
    'LS_HIGH_MAX_RANGE' => 100,

    'COINS_ORIGINAL_IMAGE_UPLOAD_PATH' => 'uploads/coins/original/',
    'COINS_THUMB_IMAGE_UPLOAD_PATH' => 'uploads/coins/thumb/',
    'COINS_THUMB_IMAGE_HEIGHT' => '300',
    'COINS_THUMB_IMAGE_WIDTH' => '300',

    'GIFTED_COINS_TEMPLATE' => 'gifted-coins-success',
    'COINS_RECEIBED_TEMPLATE' => 'coins-received',
    'PARENT_COINS_REQUEST_TEMPLATE' => 'parent-procoins-request',

    'INITIAL_COINS' => 'INITIAL_PROCOINS',
    'PURCHASED_COINS' => 'coins-parchased',

    'ADDED_PROFESSION' => 'New profession "profession name" has been added into ProTeen!',

    'PROMISE_ASSESSMENT_COUNT' => 24,

    'PARENT_TEEN_CHALLEGE_REQUEST_TEMPLATE' => 'teen-parent-challenge',
    'RECORD_PER_PAGE_ICON' => 12,

    'VIDEO_ORIGINAL_IMAGE_UPLOAD_PATH' => 'uploads/video/original/',
    'VIDEO_THUMB_IMAGE_UPLOAD_PATH' => 'uploads/video/thumb/',
    'VIDEO_THUMB_IMAGE_HEIGHT' => '300',
    'VIDEO_THUMB_IMAGE_WIDTH' => '300',

    'DEFAULT_IMAGE_HEIGHT' => '60',
    'DEFAULT_IMAGE_WIDTH' => '60',
    'LEVEL1_ICON_BASE_COUNT_PROGRESS' => '20',

    'SEND_REFERENCEID_TO_PARENT' => 'teenager-reference-id',
    'VARIFY_USER_REQUEST' => 'admin-notification-mail',
    
    'APP_LOGIC_CHAT_API_KEY' => '3eafc44b06cfa453fecab5014b5cd886a',

    'ENTERPRISE_SIGNUP_REQUEST' => 'enterprise-signup-request',

    'FAQ_ORIGINAL_IMAGE_UPLOAD_PATH' => 'uploads/faq/original/',
    'FAQ_THUMB_IMAGE_UPLOAD_PATH' => 'uploads/faq/thumb/',
    'FAQ_THUMB_IMAGE_HEIGHT' => '300',
    'FAQ_THUMB_IMAGE_WIDTH' => '300',

    'TESTINOMIAL_ORIGINAL_IMAGE_UPLOAD_PATH' => "uploads/testimonial/",

    'PROFESSION_CERTIFICATION_ORIGINAL_IMAGE_UPLOAD_PATH' => "uploads/professionCertification/original/",
    'PROFESSION_CERTIFICATION_THUMB_IMAGE_UPLOAD_PATH' => "uploads/professionCertification/thumb/",
    'PROFESSION_CERTIFICATION_THUMB_IMAGE_HEIGHT' => '300',
    'PROFESSION_CERTIFICATION_THUMB_IMAGE_WIDTH' => '300',

    'PROFESSION_SUBJECT_ORIGINAL_IMAGE_UPLOAD_PATH' => "uploads/professionSubject/original/",
    'PROFESSION_SUBJECT_THUMB_IMAGE_UPLOAD_PATH' => "uploads/professionSubject/thumb/",
    'PROFESSION_SUBJECT_THUMB_IMAGE_HEIGHT' => '300',
    'PROFESSION_SUBJECT_THUMB_IMAGE_WIDTH' => '300',
    
    'MULTI_INTELLIGENCE_TYPE' => 'mi',
    'APPTITUDE_TYPE' => 'apptitude',
    'INTEREST_TYPE' => 'interest',
    'PERSONALITY_TYPE' => 'personality',
    'CONNECTION_REJECT_STATUS' => '2',
    'CONNECTION_ACCEPT_STATUS' => '1',
    'CONNECTION_PENDING_STATUS' => '0',

    'PROFESSION_TAG_ORIGINAL_IMAGE_UPLOAD_PATH' => "uploads/professionTag/original/",
    'PROFESSION_TAG_THUMB_IMAGE_UPLOAD_PATH' => "uploads/professionTag/thumb/",
    'PROFESSION_TAG_THUMB_IMAGE_HEIGHT' => '300',
    'PROFESSION_TAG_THUMB_IMAGE_WIDTH' => '300',

    'APP_NAME' => "ProTeenLife",
    'APP_EMAIL' => "info@proteenlife.com",
    'FACTUAL_SLUG' => 'factual_evaluating_creating',
    'CONSEPTUAL_SLUG' => 'conceptual_evaluating_creating',
    'PROCEDURAL_SLUG' => 'procedural_remembering',
    'META_SLUG' => 'meta_cognitive_evaluating_creating',
    'EASY_FLAG' => 'Easy',
    'MEDIUM_FLAG' => 'Medium',
    'CHALLENGING_FLAG' => 'Challenging',

    'LEVEL1_TRAITS_ORIGINAL_IMAGE_UPLOAD_PATH' => 'uploads/level1Traits/original/',
    'LEVEL1_TRAITS_THUMB_IMAGE_UPLOAD_PATH' => 'uploads/level1Traits/thumb/',
    'LEVEL1_TRAITS_THUMB_IMAGE_HEIGHT' => '300',
    'LEVEL1_TRAITS_THUMB_IMAGE_WIDTH' => '300',
    'COIN_PACKAGE_TEENAGER_TYPE' => '1',

    'TEENAGER_PUBLIC_PROFILE_ON' => '1',

    'NOTIFICATION_ADMIN' => '1',
    'NOTIFICATION_TEENAGER' => '2',
    'NOTIFICATION_STATUS_READ' => '1',
    'NOTIFICATION_STATUS_UNREAD' => '0',
    'NOTIFICATION_TYPE_GIFT_PRO_COINS' => '1',
    'NOTIFICATION_TYPE_GIFT_COUPANS' => '2',
    'NOTIFICATION_TYPE_CONNECTION_REQUEST' => '3',
    'NOTIFICATION_TYPE_PROFILE_VIEW' => '4',
    'NOTIFICATION_TYPE_ADD_PROFESSION' => '5',
    'NOTIFICATION_TYPE_SCHOOL_APPROVE' => '6',
    'SOUND_FLAG_ON' => '1',
    
    'TEEN_BASIC_PROFILE_COMPLETE' => '10',
    'TEEN_LEVEL1_PROFILE_COMPLETE' => '10',
    'TEEN_LEVEL2_PROFILE_COMPLETE' => '90',
    'TEEN_LEVEL1_ICON_PROFILE_COMPLETE' => '10',

    'INITIAL_PRO_COINS' => '1000',
    'TEENAGER_USER_TYPE_FLAG' => '1',
    'PARENT_USER_TYPE_FLAG' => '2',
    'SPONSOR_USER_TYPE_FLAG' => '4',
    
    'SA_SMALL_IMAGE_UPLOAD_PATH' => 'uploads/sponsoractivity/300_250/',
    'SA_SMALL_IMAGE_HEIGHT' => '300',
    'SA_SMALL_IMAGE_WIDTH' => '250',

    'SA_BANNER_IMAGE_UPLOAD_PATH' => 'uploads/sponsoractivity/300_50/',
    'SA_BANNER_IMAGE_HEIGHT' => '300',
    'SA_BANNER_IMAGE_WIDTH' => '50',

    'CAREER_DETAILS_PDF_UPLOAD_PATH' => 'uploads/careerDetailsPdf/',

    'DEFAULT_TOTAL_ADVANCE_IMAGE_COUNT' => 5,
    'DEFAULT_TOTAL_ADVANCE_VIDEO_COUNT' => 1,
    'DEFAULT_TOTAL_ADVANCE_DOCUMENT_COUNT' => 1,

    'ACHIEVEMENT_BADGE1' => 3000,
    'ACHIEVEMENT_BADGE2' => 6000,
    'ACHIEVEMENT_BADGE3' => 10000,
    'ACHIEVEMENT_BADGE4' => 15000,
    'ACHIEVEMENT_BADGE5' => 20000,
    'DISPLAY_ACHIEVEMENT_BADGE1' => '3k',
    'DISPLAY_ACHIEVEMENT_BADGE2' => '6k',
    'DISPLAY_ACHIEVEMENT_BADGE3' => '10k',
    'DISPLAY_ACHIEVEMENT_BADGE4' => '15k',
    'DISPLAY_ACHIEVEMENT_BADGE5' => '20k',
    'CAREER_COMLETED_BADGE1' => 1,
    'CAREER_COMLETED_BADGE2' => 3,
    'CAREER_COMLETED_BADGE3' => 5,
    'CAREER_COMLETED_BADGE4' => 10,
    'CAREER_COMLETED_BADGE5' => 15,
    'CONNECTION_BADGE1' => 5,
    'CONNECTION_BADGE2' => 15,
    'CONNECTION_BADGE3' => 25,
    'CONNECTION_BADGE4' => 50,
    'CONNECTION_BADGE5' => 100,
    'ACHIEVEMENT_BADGE_ARRAY' => array('1' => '3000', '2' => '6000', '3' => '10000', '4' => '15000', '5' => '20000'),
    'ACHIEVEMENT_DISPLAY_BADGE_ARRAY' => array('1' => '3k', '2' => '6k', '3' => '10k', '4' => '15k', '5' => '20k'),
    'CAREER_COMPLETED_BADGE_ARRAY' => array('1' => '1', '2' => '3', '3' => '5', '4' => '10', '5' => '15'),
    'CONNECTION_BADGE_ARRAY' => array('1' => '5', '2' => '15', '3' => '25', '4' => '50', '5' => '100'),
    'PROFESSION_ATTEMPTED_FLAG' => 1,
    'PROFESSION_NOT_ATTEMPTED_FLAG' => 0,
    'CAREER_TO_CONSIDER' => 'Careers to Consider ProCoins',
    'INSTITUTE_FINDER' => 'Institute Finder ProCoins',

    'PROFESSION_INSTITUTE_PHOTO_ORIGINAL_IMAGE_UPLOAD_PATH' => 'uploads/profession_institute/original/',
    'PROFESSION_INSTITUTE_PHOTO_THUMB_IMAGE_UPLOAD_PATH' => 'uploads/profession_institute/thumb/',
    'PROFESSION_INSTITUTE_PHOTO_THUMB_IMAGE_HEIGHT' => '300',
    'PROFESSION_INSTITUTE_PHOTO_THUMB_IMAGE_WIDTH' => '300',
];
