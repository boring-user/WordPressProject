<?php
$projectTitle = 'Fittrage';
$serverTimeZone =  date_default_timezone_get();
//$serverRootPath = 'http://localhost/afittrage/';
$serverRootPath = 'http://goteso.com/test/hs/afittrage/';
$communityName = 'Fittrage Community';
//reponse messages
//signUp.php
$emailAlreadyExistSignUp = 'Email Alreay Exists';
$mobileAlreadyExistSignUp = 'Mobile Alreay Exist';
$successMessageSignUp = 'User Registered Successfully';
$failureMessageSignUp = 'User Cannot be Registered';

//login.php
$invalidLoginCredentials = 'Login Credentials you entered are invalid';
$login_s = 'Login Success';

//forgotPassword1.php
$invalidEmail = 'Email you Entered is Invalid';
$emailSendingFailed = 'Email not sent';
$emailSent = 'We have sent an email to your inbox with OTP';

//forgotPassword2.php
$passwordSentToEmail = 'Email to your inbox sent with a new password';
$emailSendingFailed2 = 'Email not sent';
$invalidOtp = 'OTP you entered is not valid';

//postUpload.php
$postUploadSuccess = 'Post Uploaded Successfully';
$postUploadFailed = 'Post Uploading Failed';

//pwdUpdate.php

$passwordChangeSuccess = 'Password Changed Successfully';
$passwordChangeFailed ='Password Updation Failed';
$invalidOldPwd = 'Invalid Old Password';

//dietMealsHistoryAdd.php

$dietMealsHistoryAddSuccess = 'Diet Meals History Added Successfully';
$dietMealsHistoryAddFailed = 'Unable to add Diet Meals History';


//emailFeedback.php

$emailFeedback_s = 'Email Feedback Submitted Successfully';
$emailFeedback_f = 'Unable to Send Feedback';

//cover Image 

$coverImageUpdated_s = 'Cover Image Updated Successfully';
$coverImageUpdated_f = 'Cover Image Updation Failed';


//gym Review

$reviewAdded_s = 'Review Added Successfully';
$reviewAdded_f = 'failed';


//post delete

$postDelete_s = 'Post Deleted Successfully';
$postDelete_f = 'failed';

$waterId = '1083';








//images paths
$dietMealsImagePath = '/admin/app_data/images/diet_meals/';
$dietPlansImagePath = '/admin/app_data/images/diet_plans/';
$catalogueImagePath = '/admin/app_data/images/gym_catalogue/';
$eventsImagePath = '/admin/app_data/images/events/';
$articlesImagePath = '/admin/app_data/images/articles/';
$trainersImagePath = '/admin/app_data/images/trainers/';
$workoutExercisesImagePath = '/admin/app_data/images/workouts/';
$galleryImagePath = '/admin/app_data/images/gym_catalogue_gallery/';
$aboutUsImagePath = '/admin/app_data/images/about_us/';
$usersImagePath = '/admin/app_data/images/users/';
$postImagePath = '/admin/app_data/images/posts/';



//notification strings

$notifyString0 = '{{otherUserId}} sent you a Friend Request';
$notifyString1 = '{{otherUserId}} accepted Friend Request';
$notifyString2 = '{{otherUserId}} is now following you';
$notifyString3 = '{{otherUserId}} likes your post';
$notifyString4 = '{{otherUserId}} commented on your post';




?>