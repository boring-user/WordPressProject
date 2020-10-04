# WordPress MySQL database migration
#
# Generated: Tuesday 13. October 2015 07:18 UTC
# Hostname: dal1521105512687.db.6791348.hostedresource.com
# Database: `dal1521105512687`
# --------------------------------------------------------

/*!40101 SET NAMES utf8 */;

SET sql_mode='NO_AUTO_VALUE_ON_ZERO';



#
# Delete any existing table `wp_cf7dbplugin_st`
#

DROP TABLE IF EXISTS `wp_cf7dbplugin_st`;


#
# Table structure of table `wp_cf7dbplugin_st`
#

CREATE TABLE `wp_cf7dbplugin_st` (
  `submit_time` decimal(16,4) NOT NULL,
  PRIMARY KEY (`submit_time`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


#
# Data contents of table `wp_cf7dbplugin_st`
#
INSERT INTO `wp_cf7dbplugin_st` ( `submit_time`) VALUES
('1444718421.5848'),
('1444718470.6242'),
('1444718615.8504') ;

#
# End of data contents of table `wp_cf7dbplugin_st`
# --------------------------------------------------------



#
# Delete any existing table `wp_cf7dbplugin_submits`
#

DROP TABLE IF EXISTS `wp_cf7dbplugin_submits`;


#
# Table structure of table `wp_cf7dbplugin_submits`
#

CREATE TABLE `wp_cf7dbplugin_submits` (
  `submit_time` decimal(16,4) NOT NULL,
  `form_name` varchar(127) CHARACTER SET utf8 DEFAULT NULL,
  `field_name` varchar(127) CHARACTER SET utf8 DEFAULT NULL,
  `field_value` longtext CHARACTER SET utf8,
  `field_order` int(11) DEFAULT NULL,
  `file` longblob,
  KEY `submit_time_idx` (`submit_time`),
  KEY `form_name_idx` (`form_name`),
  KEY `field_name_idx` (`field_name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


#
# Data contents of table `wp_cf7dbplugin_submits`
#
INSERT INTO `wp_cf7dbplugin_submits` ( `submit_time`, `form_name`, `field_name`, `field_value`, `field_order`, `file`) VALUES
('1444718421.5848', 'Home page contact form', 'home_name', 'Prasun Saha', 0, NULL),
('1444718421.5848', 'Home page contact form', 'home_email', 'prasun.saha.88@gmail.com', 1, NULL),
('1444718421.5848', 'Home page contact form', 'home_phone', '8017972485', 2, NULL),
('1444718421.5848', 'Home page contact form', 'home_message', 'testing ', 3, NULL),
('1444718421.5848', 'Home page contact form', 'Submitted From', '14.96.9.224', 10000, NULL),
('1444718470.6242', 'Home page contact form', 'home_name', 'prasun', 0, NULL),
('1444718470.6242', 'Home page contact form', 'home_email', 'prasun.saha.88@gmail.com', 1, NULL),
('1444718470.6242', 'Home page contact form', 'home_phone', '9874125878', 2, NULL),
('1444718470.6242', 'Home page contact form', 'home_message', 'hii', 3, NULL),
('1444718470.6242', 'Home page contact form', 'Submitted From', '14.96.9.224', 10000, NULL),
('1444718615.8504', 'Home page contact form', 'home_name', 'prasun', 0, NULL),
('1444718615.8504', 'Home page contact form', 'home_email', 'prasun.saha.88@gmail.com', 1, NULL),
('1444718615.8504', 'Home page contact form', 'home_phone', '9874125878', 2, NULL),
('1444718615.8504', 'Home page contact form', 'home_message', 'hii', 3, NULL),
('1444718615.8504', 'Home page contact form', 'Submitted From', '14.96.9.224', 10000, NULL) ;

#
# End of data contents of table `wp_cf7dbplugin_submits`
# --------------------------------------------------------



#
# Delete any existing table `wp_commentmeta`
#

DROP TABLE IF EXISTS `wp_commentmeta`;


#
# Table structure of table `wp_commentmeta`
#

CREATE TABLE `wp_commentmeta` (
  `meta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `comment_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) DEFAULT NULL,
  `meta_value` longtext,
  PRIMARY KEY (`meta_id`),
  KEY `comment_id` (`comment_id`),
  KEY `meta_key` (`meta_key`(191))
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


#
# Data contents of table `wp_commentmeta`
#

#
# End of data contents of table `wp_commentmeta`
# --------------------------------------------------------



#
# Delete any existing table `wp_comments`
#

DROP TABLE IF EXISTS `wp_comments`;


#
# Table structure of table `wp_comments`
#

CREATE TABLE `wp_comments` (
  `comment_ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `comment_post_ID` bigint(20) unsigned NOT NULL DEFAULT '0',
  `comment_author` tinytext NOT NULL,
  `comment_author_email` varchar(100) NOT NULL DEFAULT '',
  `comment_author_url` varchar(200) NOT NULL DEFAULT '',
  `comment_author_IP` varchar(100) NOT NULL DEFAULT '',
  `comment_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_content` text NOT NULL,
  `comment_karma` int(11) NOT NULL DEFAULT '0',
  `comment_approved` varchar(20) NOT NULL DEFAULT '1',
  `comment_agent` varchar(255) NOT NULL DEFAULT '',
  `comment_type` varchar(20) NOT NULL DEFAULT '',
  `comment_parent` bigint(20) unsigned NOT NULL DEFAULT '0',
  `user_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`comment_ID`),
  KEY `comment_post_ID` (`comment_post_ID`),
  KEY `comment_approved_date_gmt` (`comment_approved`,`comment_date_gmt`),
  KEY `comment_date_gmt` (`comment_date_gmt`),
  KEY `comment_parent` (`comment_parent`),
  KEY `comment_author_email` (`comment_author_email`(10))
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


#
# Data contents of table `wp_comments`
#

#
# End of data contents of table `wp_comments`
# --------------------------------------------------------



#
# Delete any existing table `wp_easy_pie_contacts`
#

DROP TABLE IF EXISTS `wp_easy_pie_contacts`;


#
# Table structure of table `wp_easy_pie_contacts`
#

CREATE TABLE `wp_easy_pie_contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `friendly_name` varchar(255) DEFAULT NULL,
  `public_id` char(36) DEFAULT NULL,
  `creation_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `public_id_idx` (`public_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;


#
# Data contents of table `wp_easy_pie_contacts`
#
INSERT INTO `wp_easy_pie_contacts` ( `id`, `friendly_name`, `public_id`, `creation_date`) VALUES
(1, 'Narayan', '8223FD93-FF51-45E3-B106-FCDAB2857AF9', '2015-09-29 09:28:25'),
(2, 'Vinita Singh', '046132CE-E3A8-44E2-B9F2-ADAF97130E9A', '2015-10-08 12:04:24') ;

#
# End of data contents of table `wp_easy_pie_contacts`
# --------------------------------------------------------



#
# Delete any existing table `wp_easy_pie_cs_entities`
#

DROP TABLE IF EXISTS `wp_easy_pie_cs_entities`;


#
# Table structure of table `wp_easy_pie_cs_entities`
#

CREATE TABLE `wp_easy_pie_cs_entities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) DEFAULT NULL,
  `data` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;


#
# Data contents of table `wp_easy_pie_cs_entities`
#
INSERT INTO `wp_easy_pie_cs_entities` ( `id`, `type`, `data`) VALUES
(1, 'EZP_CS_Display_Entity', '{"background_image_url":"http:\\/\\/dalmiaadvisory.com\\/wp-content\\/plugins\\/easy-pie-coming-soon\\/images\\/backgrounds\\/cloud-1.jpg","builtin_background_image":null,"background_color":"#00FF00","background_tiling_enabled":false,"logo_width":"15%","logo_height":"","content_box_opacity":0.4,"content_box_color":"#000000","text_headline_font_name":"arial","text_headline_font_size":"42px","text_headline_font_color":"#FFFFFF","text_description_font_name":"arial","text_description_font_size":"20px","text_description_font_color":"#FFFFFF","text_disclaimer_font_name":"times-new-roman","text_disclaimer_font_size":"14px","text_disclaimer_font_color":"#FFFFFF","text_footer_font_name":"times-new-roman","text_footer_font_size":"13px","text_footer_font_color":"#FFFFFF","email_button_width":"120px","email_button_height":"42px","email_button_font_name":"arial","email_button_font_size":"16px","email_button_font_color":"#FFFFFF","email_button_color":"#E34141","css":"\\/* This code adds a shadow around the content box *\\/\\r\\n#headline { font-weight: bold }\\r\\n#content-area { box-shadow: 1px 7px 36px -5px rgba(34,34,34,1);}"}'),
(2, 'EZP_CS_Content_Entity', '{"logo_url":"","headline":"Coming soon","description":"Our exciting new website is coming soon! Check back later.","disclaimer":"We won\'t spam you or sell your email address.","footer":"(C)2014 My Company LLC","email_placeholder_text":"Enter email","name_placeholder_text":"Enter name","email_button_text":"Subscribe","thank_you_headline":"Thank you!","thank_you_description":"You\'ll hear from us when we launch.","title":"Coming soon","countdown_due_date":"10\\/11\\/2015"}'),
(3, 'EZP_CS_Set_Entity', '{"display_index":1,"content_index":2}'),
(4, 'EZP_CS_Config_Entity', '{"coming_soon_mode_on":"","collect_email":"on","collect_name":"on","return_code":"503","author_url":"","meta_description":"","meta_keywords":"","analytics_code":"","facebook_url":"","twitter_url":"","google_plus_url":"","unfiltered_urls":"","allowed_urls":""}'),
(5, 'EZP_CS_Global_Entity', '{"active_set_index":3,"config_index":4,"plugin_version":null}') ;

#
# End of data contents of table `wp_easy_pie_cs_entities`
# --------------------------------------------------------



#
# Delete any existing table `wp_easy_pie_cs_subscribers`
#

DROP TABLE IF EXISTS `wp_easy_pie_cs_subscribers`;


#
# Table structure of table `wp_easy_pie_cs_subscribers`
#

CREATE TABLE `wp_easy_pie_cs_subscribers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contact_id` int(11) DEFAULT NULL,
  `subscription_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;


#
# Data contents of table `wp_easy_pie_cs_subscribers`
#
INSERT INTO `wp_easy_pie_cs_subscribers` ( `id`, `contact_id`, `subscription_date`) VALUES
(1, 1, '2015-09-29 09:28:25'),
(2, 2, '2015-10-08 12:04:24') ;

#
# End of data contents of table `wp_easy_pie_cs_subscribers`
# --------------------------------------------------------



#
# Delete any existing table `wp_easy_pie_emails`
#

DROP TABLE IF EXISTS `wp_easy_pie_emails`;


#
# Table structure of table `wp_easy_pie_emails`
#

CREATE TABLE `wp_easy_pie_emails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email_address` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `contact_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;


#
# Data contents of table `wp_easy_pie_emails`
#
INSERT INTO `wp_easy_pie_emails` ( `id`, `email_address`, `name`, `contact_id`) VALUES
(1, 'narayan.mit@gmail.com', 'Main Email', 1),
(2, 'vinita@karvy.com', 'Main Email', 2) ;

#
# End of data contents of table `wp_easy_pie_emails`
# --------------------------------------------------------



#
# Delete any existing table `wp_links`
#

DROP TABLE IF EXISTS `wp_links`;


#
# Table structure of table `wp_links`
#

CREATE TABLE `wp_links` (
  `link_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `link_url` varchar(255) NOT NULL DEFAULT '',
  `link_name` varchar(255) NOT NULL DEFAULT '',
  `link_image` varchar(255) NOT NULL DEFAULT '',
  `link_target` varchar(25) NOT NULL DEFAULT '',
  `link_description` varchar(255) NOT NULL DEFAULT '',
  `link_visible` varchar(20) NOT NULL DEFAULT 'Y',
  `link_owner` bigint(20) unsigned NOT NULL DEFAULT '1',
  `link_rating` int(11) NOT NULL DEFAULT '0',
  `link_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `link_rel` varchar(255) NOT NULL DEFAULT '',
  `link_notes` mediumtext NOT NULL,
  `link_rss` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`link_id`),
  KEY `link_visible` (`link_visible`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


#
# Data contents of table `wp_links`
#

#
# End of data contents of table `wp_links`
# --------------------------------------------------------



#
# Delete any existing table `wp_ncl_nri_fqcat`
#

DROP TABLE IF EXISTS `wp_ncl_nri_fqcat`;


#
# Table structure of table `wp_ncl_nri_fqcat`
#

CREATE TABLE `wp_ncl_nri_fqcat` (
  `nri_fqcat_id` int(200) NOT NULL AUTO_INCREMENT,
  `nri_fqcat_name` varchar(2000) DEFAULT NULL,
  `nri_fqcat_position` varchar(2000) DEFAULT NULL,
  `nri_fqcat_img` varchar(2000) DEFAULT NULL,
  `nri_fqcat_date` date DEFAULT NULL,
  PRIMARY KEY (`nri_fqcat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;


#
# Data contents of table `wp_ncl_nri_fqcat`
#
INSERT INTO `wp_ncl_nri_fqcat` ( `nri_fqcat_id`, `nri_fqcat_name`, `nri_fqcat_position`, `nri_fqcat_img`, `nri_fqcat_date`) VALUES
(1, 'Investment FAQ', '1', '03-09-15-4887--ico1.png', '2015-09-03'),
(2, 'NRI FAQ', '2', '03-09-15-14269--nri3.png', '2015-09-03') ;

#
# End of data contents of table `wp_ncl_nri_fqcat`
# --------------------------------------------------------



#
# Delete any existing table `wp_ncl_nri_fqsubcat`
#

DROP TABLE IF EXISTS `wp_ncl_nri_fqsubcat`;


#
# Table structure of table `wp_ncl_nri_fqsubcat`
#

CREATE TABLE `wp_ncl_nri_fqsubcat` (
  `nri_fqsubcat_id` int(200) NOT NULL AUTO_INCREMENT,
  `nri_fqsubcat_name` varchar(2000) DEFAULT NULL,
  `nri_fqcat_id` varchar(2000) DEFAULT NULL,
  `sub_position` int(200) DEFAULT NULL,
  `home_subcat_position` int(200) DEFAULT NULL,
  `nri_fqsubcat_date` date DEFAULT NULL,
  PRIMARY KEY (`nri_fqsubcat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;


#
# Data contents of table `wp_ncl_nri_fqsubcat`
#
INSERT INTO `wp_ncl_nri_fqsubcat` ( `nri_fqsubcat_id`, `nri_fqsubcat_name`, `nri_fqcat_id`, `sub_position`, `home_subcat_position`, `nri_fqsubcat_date`) VALUES
(1, 'Public Provident Fund', '1', 2, 1, '2015-09-25'),
(2, 'Mutual Fund', '1', 1, 0, '2015-09-25'),
(5, 'National Pension Scheme', '1', 3, 2, '2015-09-25'),
(7, 'Mutual Fund', '2', 2, 2, '2015-09-25'),
(8, 'Share Investment', '2', 3, 1, '2015-09-25'),
(9, 'Bank Accounts', '2', 1, 0, '2015-09-25') ;

#
# End of data contents of table `wp_ncl_nri_fqsubcat`
# --------------------------------------------------------



#
# Delete any existing table `wp_ncl_nri_ques`
#

DROP TABLE IF EXISTS `wp_ncl_nri_ques`;


#
# Table structure of table `wp_ncl_nri_ques`
#

CREATE TABLE `wp_ncl_nri_ques` (
  `nri_ques_id` int(200) NOT NULL AUTO_INCREMENT,
  `ques_name` varchar(2000) DEFAULT NULL,
  `ques_ans` text,
  `ques_views` int(200) DEFAULT NULL,
  `nri_fqsubcat_id` varchar(2000) DEFAULT NULL,
  `ques_position` int(200) DEFAULT NULL,
  `home_ques_position` int(200) DEFAULT NULL,
  `nri_faq_date` date DEFAULT NULL,
  PRIMARY KEY (`nri_ques_id`)
) ENGINE=InnoDB AUTO_INCREMENT=258 DEFAULT CHARSET=latin1;


#
# Data contents of table `wp_ncl_nri_ques`
#
INSERT INTO `wp_ncl_nri_ques` ( `nri_ques_id`, `ques_name`, `ques_ans`, `ques_views`, `nri_fqsubcat_id`, `ques_position`, `home_ques_position`, `nri_faq_date`) VALUES
(1, 'How to open PPF (Public Provident Fund) account?', 'To open PPF account, one need to fill up PPF Account Opening Form - \'A\' and submit at any nearest authorised Bank Branch / Post Office along with the required KYC documents.\r\n', 13, '1', 1, 0, '2015-09-25'),
(2, 'Who can open a PPF account?', 'A PPF account can be opened by resident individuals and individuals on behalf of minors.\r\n', 13, '1', 2, 3, '2015-09-25'),
(3, 'Who can not open a PPF account?', 'A Non Resident Indian (NRI) and Hindu Undivided Family (HUF) cannot open an account under the scheme.\r\n', 9, '1', 3, 0, '2015-09-25'),
(4, 'Can I maintain more than one PPF account under my name?', 'Only one PPF account can be maintained by an individual, except an account that is opened on behalf of a minor.\r\n', 3, '1', 4, 0, '2015-09-25'),
(5, 'Can a PPF account be opened in the name of a minor?', 'Yes. A PPF account can be opened either by the Mother or Father on behalf of their minor Son or Daughter. However, the Mother and Father both cannot open PPF accounts on behalf of the same minor.\r\n', 6, '1', 5, 0, '2015-09-25'),
(6, 'Can grand-parents open open PPF account on behalf of minor grand-child?', 'Grand-parents cannot open a PPF account on behalf of minor grand-child. However, in case of death of both the Father and Mother, grand-parents can open a PPF account as guardians of the grand-child.\r\n', 3, '1', 6, 0, '2015-09-25'),
(7, 'What will happen in the event of the death of a guardian, in relation to a minor?', 'In case of death of guardian, the account of minor remains operative and a new account need not be opened. The surviving natural guardian or a guardian appointed by a competent court may continue the account of minor after producing the necessary guardianship certificate.\r\n', 2, '1', 7, 0, '2015-09-25'),
(8, 'In the event of the death of the minor subscriber is the balance in the account payable to the guardian?', 'No, the guardian is not entitled to the payment of the balance. The balance in such cases is payable to the legal heirs of the minor in accordance with Section 8 of Public Provident Fund Act and para 12(6)(ii) of the Public Provident Fund Scheme.\r\n', 6, '1', 8, 0, '2015-09-25'),
(9, 'Can a PPF account be transferred from one individual to another?', 'A PPF account is not transferable from one individual to another, as such the nominee cannot continue the account of a deceased subscriber in his own name.\r\n', 5, '1', 9, 0, '2015-09-25'),
(10, 'Is nomination facility available under the scheme?', 'The PPF scheme facilitates nominations of one or more persons to receive the amount standing to the subscriber\'s credit in case of death. However, no nomination is allowed in case of minor account.\r\n', 20, '1', 10, 0, '2015-09-25'),
(11, 'How is the repayment done after the death of the subscriber', 'If a subscriber to an account in respect of which nomination is in force dies, the nominee or nominees may make an application in Form- \'G\' to the Bank together with the proof of death of the subscriber and on receipt of such application all amounts standing to the credit of the subscriber after making adjustment, if any in respect of interest on loans taken by the subscriber shall be repaid by the Bank itself to the nominee or nominees. If the nominee is dead, the surviving nominee or nominees shall, in addition to the proof of death of the subscriber, also furnish proof of the death of the deceased nominee. Where there is NO nomination in force at the time of death of the subscriber, the amount standing to the credit of the deceased after making adjustment, if any, in respect of interest on loans taken by the subscriber, shall be repaid by the Bank to the legal heirs of the deceased on receipt of application in Form- \'G\' in this behalf from them. If the credit balance standing in the account is upto Rs.1 lakh, the same may be paid to his/her legal heirs on production of : a). A letter of indemnity. b). An affidavit c). A letter of disclaimer on affidavit, and d). A certificate of death of subscriber, on stamped paper. \r\n', 12, '1', 11, 0, '2015-09-25'),
(12, 'Does the PPF account earn interest after the death of the subscriber? ', 'On the death of the subscriber, the balance in PPF account does not cease to earn interest. The interest is admissible till the end of the month preceding the month in which payment of the deposits is made to the nominee / legal heirs.\r\n', 4, '1', 12, 0, '2015-09-25'),
(13, 'Can there be a change in nominations?', 'Yes, changes to previous nomination(s) are possible by applying a fresh nimination(s) in Form \'F\'.\r\n', 6, '1', 13, 0, '2015-09-25'),
(14, 'Can a change in name of female subscriber on account of marriage possible?', 'In the event of her marriage, a female subscriber may request for change in surname by submitting documentary evidence of the same.\r\n', 1, '1', 14, 0, '2015-09-25'),
(15, 'Can the PPF account be transferred from a Bank/Post Office to another Bank/Post Office?', ' Yes, as per the PPF scheme of the Government, subscribers can transfer their PPF account from one authorised bank or Post office to another authorised bank or Post office. In such a case, the PPF account will be considered as a continuing account.\r\n', 2, '1', 15, 2, '2015-09-25'),
(16, 'Will the account number of PPF get changed when transferred from a Bank/Post Office to another Bank/Post Office happens?', ' Yes, the transfer entails closing the account at the existing location and opening a new one. In such case new account number will be issue to the subscriber.\r\n ', 2, '1', 16, 0, '2015-09-25'),
(17, 'Is there any charge on transferring PPF account from a Bank/Post Office to another Bank/Post Office?', 'No. There is no charge on transfer of PPF account from a Bank/Post Office to another Bank/Post office.\r\n', 4, '1', 17, 0, '2015-09-25'),
(18, 'When does a PPF account mature?', 'A PPF account gets matured after the completion of 15 years from the end of the financial year in which the account was opened.\r\n', 2, '1', 18, 0, '2015-09-25'),
(19, 'Can I terminate or close the PPF account before maturity?', 'No premature closure is allowed for PPF accounts.\r\n', 4, '1', 19, 0, '2015-09-25'),
(20, 'Can I extend the tenure of a PPF investment beyond the Maturity Period?', 'An investor can extend the tenure of a PPF investment for a block of  5 years beyond the maturity period by submitting Form- \'H\' within one year from the date of maturity.\r\n', 2, '1', 20, 0, '2015-09-25'),
(21, 'Can a PPF account Continue without Deposits after Maturity?', 'A subscriber can retain his / her PPF account after maturity without making any further deposits. The balance will continue to earn interest. The subscriber can make one withdrawal of any amount in each financial year.\r\n', 2, '1', 21, 0, '2015-09-25'),
(22, 'What is the minimum and maximum amount that can be invested under the PPF?', 'The minimum deposit amount is Rs. 500/- per annum and the upper ceiling limit is Rs. 1,50,000/- per annum. The upper ceiling limit is decided by the Central Government from time to time.\r\n', 2, '1', 22, 0, '2015-09-25'),
(23, 'When is a PPF account treated as discontinued?', 'If an investor fails to deposit the minimum amount of Rs. 500/- in any financial year, the account will be treated as discontinued.\r\n', 2, '1', 23, 0, '2015-09-25'),
(24, 'How can a Discontinued Account be revived?', 'The investor may revive the discontinued account by payment of Rs. 50/- for each year of default  along with arrear subscription of Rs. 500/- for each ear.\r\n', 2, '1', 24, 0, '2015-09-25'),
(25, 'What is number of installment for deposit under PPF scheme allowed in a particular financial year? ', 'The deposit into an account can be made in a single lump sum or in instalments not exceeding twelve in a financial year. \r\n', 2, '1', 25, 0, '2015-09-25'),
(26, 'What is the interest earned in PPF account?', 'The current rate of interest on PPF is 8.70%, which is compounded annually. Interest rate on PPF is governed by the Central Government from time to time.\r\n', 2, '1', 26, 0, '2015-09-25'),
(27, 'What are the tax benefits from PPF investment?', 'The invested amount is eligible for deduction under the Rs. 1,50,000/- limit of Section 80C. On maturity, the entire amount including the interest is non-taxable.\r\n', 4, '1', 27, 1, '2015-09-25'),
(28, 'Can I contribute to the PPF account of my parent’s and claim section 80C tax benefit? ', 'No, you’re not allowed to claim tax benefits on the contribution made by you in the PPF account of your mother or father.\r\n', 6, '1', 28, 0, '2015-09-25'),
(29, 'Can I avail of Loan facility on my PPF invstment?', 'Yes, loan facility can be availed between third to sixth financial year. The amount of loan can\'t exceed 25% of the balance at the end of 2nd immediately preceding year.\r\n', 4, '1', 29, 0, '2015-09-25'),
(30, 'Is Partial Withdrawal allowed from the PPF account?', '"Anytime after the expiry of five years from the end of the financial year in which the initial subscription was made, you can withdraw upto 50% of the balance that \r\nstood to your credit at the end of the 4th financial year immediately preceding the year of \r\nwithdrawal or at the end of the preceding financial year, whichever is lower, less the loan amount (if\r\nany). Only one withdrawal is allowed per financial year.\r\n"\r\n', 2, '1', 30, 0, '2015-09-25'),
(31, 'Whan can I start making partial withdrawls / take loans from PPF account?', 'Loan facility is available from 3rd year to 6th year. From 7th year onward, you’re allowed to make partial withdrawals. Also note that once you become eligible for withdrawals, no loans are allowed. The basic difference between the two is that unlike withdrawal facility, loan carries interest and is to be repaid.\r\n', 2, '1', 31, 0, '2015-09-25'),
(32, 'Is Partial Withdrawal allowed from a Minor\'s Account?', 'Withdrawals from a minor\'s account requires the guardian to furnish a certificate in the following form: "Certified that the amount sought to be withdrawn is required for the use of ______________ who is alive and is still a minor."\r\n', 1, '1', 32, 0, '2015-09-25'),
(33, 'If a cheque deposited in PPF nearing to the end of the financial years, for e.g. on March 29, 2015 but clearance happens on April 1, 2015, in which financial year deduction can be claimed?', 'Here the claim can be made for the FY 2015-16. Earlier it was possible to claim as per the cheque deposited date, but from March 29, 2010 the rules has been changed. Now the date of realisation of cheque/draft will be deemed as the date of deposit of PPF.\r\n', 2, '1', 33, 0, '2015-09-25'),
(34, 'Can the PPF account be attached?', 'Yes, the PPF account can be attached by the Income Tax and Estate Duty authorities. The PPF act only gives the account holder immunity against attachment under a decree / order of a court of law. That means PPF can’t be attached by any court.\r\n', 0, '1', 34, 0, '2015-09-25'),
(35, 'If an NRI opened a PPF account while he/she was a resident India and subsequently, he/she moved out of India and got the status of NRI while the scheme is yet to mature. Now can the said NRI operate it and make further investments?', 'Yes, in such case an NRI can continue to make the deposits in the PPF account (which was opened while he/she was resident Indian) till the maturity but cannot extend the account.\r\n', 4, '1', 35, 0, '2015-09-25'),
(36, 'From which account can an NRI invest in the PPF account?', 'An NRI can use the funds in the NRE account or the NRO account to make investments in the PPF account.\r\n', 0, '1', 36, 0, '2015-09-25'),
(37, 'Can NRI invest in shares in India through a stock exchange? ', 'Yes, NRI can purchase shares or convertible debenture of an Indian Company through stock exchanges, under the portfolio investment scheme on repatriation and /or non repatriation basis.', 2, '8', 1, 0, '2015-09-27'),
(38, 'Are NRIs allowed to invest in Exchange Traded Funds (ETFs)?', 'Yes, NRIs are allowed to Invest in Exchange Traded Funds (ETFs). NRIs can invest in ETFs both on repatriation as well as non repatriation basis. \r\n', 0, '8', 2, 0, '2015-09-27'),
(39, 'How can NRIs invest in shares in India? ', 'As per Reserve Bank of India (RBI) guidelines, NRI who wishes to invest in shares in India through a stock exchange need to approach the designated branch of any authorized dealer (bank) authorized by reserve bank to administer the PIS (Portfolio Investment Scheme) to open a NRE (Non Resident External) /NRO (Non Resident Ordinary) account under the scheme for routing Investments.', 0, '8', 3, 1, '2015-09-27'),
(40, 'What is a designated bank branch?', 'Reserve bank of India has authorized few branches of each authorized dealer bank to conduct the business under portfolio investment scheme on behalf of NRIs. NRI can select only one authorized dealer bank for the purpose of investments under portfolio investment scheme and route the transactions through the branch designated by the authorized dealer bank.', 0, '8', 4, 0, '2015-09-27'),
(41, 'What is a Portfolio Investment Scheme (PIS)? ', 'Portfolio Investment Scheme (PIS) is a scheme of reserve bank of India under which NRIs can purchase/sell shares/convertible debentures of Indian companies on Stock Exchanges under Portfolio Investment Scheme. For this purpose, the NRI/PIO has to apply to a designated branch of a bank, which deals in Portfolio Investment. All sale/purchase transactions are to be routed through the designated branch. ', 0, '8', 5, 2, '2015-09-27'),
(42, 'Can PIO (Person of Indian Origin) as well as OCI (Overseas Citizen of India) also invest in shares in India?', 'Yes, PIOs and OCIs do have a parity with NRIs in respect of all facilities available to the NRIs in the economic, financial and educational fields except in matters relating to the acquisition of agricultural/ plantation properties. ', 0, '8', 6, 0, '2015-09-27'),
(43, 'Can Overseas Corporate Body (OCBs) also invest in shares in India?', 'OCBs have been prohibited from making investments under Portfolio Investment Scheme. OCBs have been de-recognized as a class of investor entity w.e.f. September, 16, 2003. Further, the OCBs which have already made investments under the PIS are allowed to continue holding such shares /convertible debentures till such time these are sold on the stock exchange.', 0, '8', 7, 0, '2015-09-27'),
(44, 'What are the documents required to be collected from Investor to open a NRI/PIO/OCI trading account?', ' List of documents to be taken while registering NRI/PIO/OCI Clients as may be applicable: <br> \r\n<br>\r\n1. Document ensuring status of entity <br>  \r\nIn case of Indian passport - Valid passport, Place of birth as India, Valid Visa – Work/ Student/ employment/ resident permit  etc. <br> \r\nIn case of foreign passport : Valid passport and any of the following <br>\r\n• Place of Birth as India in foreign passport <br>\r\n• Copy of PIO / OCI Card as applicable in case of PIO/OCI <br>\r\n<br>\r\n2. PIS Permission Letter from the respective designated bank <br>\r\n3. PAN Card <br>\r\n4. Overseas Address-  Driving License/ Foreign passport /Utility Bills/ Bank statement (not more than 2 months old)/ Notarized copy of rent agreement/ leave & license agreement/ Sale deed. <br>\r\n5. Photograph of Investor. <br>\r\n6. Proof of respective bank accounts & depository accounts. ', 3, '8', 8, 0, '2015-09-27'),
(45, 'What are other client registration formalities to be taken care while registering NRI/PIO/OCI Clients?', 'In case of NRI/PIO/OCI client registration documents are required to be executed by client himself and not by Power of Attorney Holder. In case of In-person verification of such clients, the members may obtain from such clients KYC documents attested by any one of the following entities – Indian Embassy/Consulate general in the country where the client resides, Notary Public, Court, Magistrate, Judge or Local banker.', 0, '8', 9, 0, '2015-09-27'),
(46, 'Is it mandatory for a client to provide local (Indian) address? ', 'At the time of client registration, client needs to provide its foreign address along with documentary proof of the same. If client so desire it can keep its local address as correspondence address. In such scenario additionally they are required to provide documentary evidence in support of local address also. ', 0, '8', 10, 0, '2015-09-27'),
(47, 'Can two separate trading accounts namely (NRE & NRO) can be opened by NRI? ', 'Yes, clients can have two separate trading accounts based on NRE & NRO. ', 0, '8', 11, 0, '2015-09-27'),
(48, 'What are the additional requirement with respect to contract notes?', 'Contract notes in original for both purchase and sale transactions needs to be submitted with in the time specified by the designated bank to enable designated banks to report the same to Reserve Bank of India. \r\n', 0, '8', 12, 0, '2015-09-27'),
(49, 'What precautions trading member needs to take while dealing with NRI Clients?', 'Trading member need to ensure that <br>\r\n<br>\r\n• Securities are not in RBI ban list before executing the order. <br>\r\n• Clear funds are available for purchases. <br>\r\n• Securities are available before executing any sell order. <br>\r\n• Depending upon whether the purchases are made on repatriation / non-repatriation basis pay-out of the securities needs to be transferred to respective de-mat account. <br>\r\n• Purchase/Sale transactions in cash segment should be settled by delivery only. <br>', 1, '8', 13, 0, '2015-09-27'),
(50, 'Is there any ceiling on the Investments under the Portfolio Investment Scheme?', 'NRIs are allowed to invest in shares of listed Indian companies in recognized Stock Exchanges under the PIS. <br>\r\n<br> \r\na. NRIs can invest through designated ADs, on repatriation and non-repatriation basis under PIS route up to 5 per cent of the paid- up capital / paid-up value of each series of debentures of listed Indian companies. <br> \r\nb. The aggregate paid-up value of shares / convertible debentures purchased by all NRIs cannot exceed 10 per cent of the paid-up capital of the company / paid-up value of each series of debentures of the company. <br>\r\nc. The aggregate ceiling of 10 per cent can be raised to 24 per cent, if the General Body of the Indian company passes a special resolution to that effect. ', 0, '8', 14, 3, '2015-09-27'),
(51, 'How payments could be made by NRIs for shares purchased on stock exchange?', 'Payment for purchase of shares and/or debentures on repatriation basis has to be made by way of inward remittance of foreign exchange through normal banking channels or out of funds held in NRE/FCNR(B) account maintained in India. If the shares are purchased on non-repatriation basis, the NRIs can also utilize their funds in NRO account in addition to the above.', 0, '8', 15, 0, '2015-09-27'),
(52, 'How NRIs/PIO can remit Sale proceeds?', 'In case of NRI/PIO, if the shares sold were held on repatriation basis, the sale proceeds (net of taxes) may be credited to his NRE /FCNR(B)/NRO accounts of the NRI/PIO, whereas sale proceeds of non repatriable investment can be credited only to NRO accounts.', 0, '8', 16, 0, '2015-09-27'),
(53, 'Can an NRI transfer shares purchased under PIS to others under private arrangement?', 'Shares purchased under PIS on stock exchange shall be sold on stock exchange only. Such Shares cannot be transferred by way of sale under private arrangement or by way of gift (except by NRIs to their relatives as defined in Section 6 of Companies Act, 1956 or to a charitable trust duly registered under the laws in India) to a person resident in India or outside India without prior approval of the Reserve Bank.', 0, '8', 17, 0, '2015-09-27'),
(54, 'Can an NRI purchase securities by subscribing to public issue? What are the permissions/approvals required? How can those shares be sold?', 'Yes. The issuing company may issue shares to NRI on the basis of specific or general permission from GoI/RBI. Therefore, individual NRI need not obtain any permission. While seeking the credit of sale proceeds to NRE/NRO account, the designated bank should be provided with the details regarding date of allotment and cost of acquisition to calculate the taxes, if any.', 0, '8', 18, 0, '2015-09-27'),
(55, 'Can NRI do Intra-day transactions in cash segment?', 'No, NRI Investor has to take delivery of shares purchased and give delivery of shares sold. Short Selling is not permitted.', 0, '8', 19, 0, '2015-09-27'),
(56, 'Can NRI trade in futures & options segment of the Exchange?', 'Yes, NRIs are allowed to invest in futures & options segment of the exchange out of Rupee funds held in India on non repatriation basis, subject to the limits prescribed by SEBI.', 0, '8', 20, 0, '2015-09-27'),
(57, 'Can NRI trade in Currency derivative segment of the Exchange?', 'No, Only “a person resident in India” as defined in section 2(v) of FEMA Act 1999 are allowed to participate in currency derivative segment of the Exchange.', 0, '8', 21, 0, '2015-09-27'),
(58, 'Can trading account be opened for person’s resident outside India who had been allotted shares under ESOP scheme?', 'Listed Indian companies are allowed to issue shares under the Employees Stock Option Scheme (ESOPs), to its employees or employees of its joint venture or wholly owned subsidiary abroad who are resident outside India, other than to the citizens of Pakistan. Trading account can be opened for person’s resident outside India only for the sole objective of selling of shares acquired under ESOP Scheme.', 0, '8', 22, 0, '2015-09-27'),
(59, 'Can rights/bonus shares be issued to NRI?', 'FEMA provisions allow Indian companies to issue Rights / Bonus shares to existing non-resident shareholders, subject to adherence to sectoral cap as may be applicable.', 0, '8', 23, 0, '2015-09-27'),
(60, 'What needs to be done by NRIs for trading in Futures & Options segment of the Exchange?', 'An NRI, who wishes to trade on the F&O segment of the exchange, is required to approach the exchange through a clearing member, through whom the NRI would like to clear his trades for allotment of custodial participant (CP) code. Clearing corporation would assign a CP code to each NRI, based on the application received from the clearing member of the NRI. Trading members should ensure that at the time of order entry CP Code of the NRI is placed in the CP Code field of the trading system. The NRI client shall have only one clearing member at any given point of time.', 0, '8', 24, 0, '2015-09-27'),
(61, 'What are the limits applicable to NRI in Exchange Traded Derivative Contracts?', 'Position limits would be applicable on the combined position in all derivative contracts on an underlying stock at an Exchange. Position limits for NRIs shall be same as the client level position limits specified by SEBI from time to time. For Index based contracts - Disclosure requirement for any persons or persons acting in concert who together own 15% or more of the open interest of all derivative contracts on a particular underlying Index. For Stock option and single stock futures contracts – The gross open position across all the derivative contracts for a security for each specific client shall not exceed higher of: o 1% of the free float market capitalization (in terms of number of shares) OR o 5% of the open interest in all derivative contracts in the same underlying stock (in terms of number of shares) Client level position limits security-wise, are made available to members on NSE’s website (www.nseindia.com).', 0, '8', 25, 0, '2015-09-27'),
(62, 'How Investment positions of NRIs are monitored?', 'Reserve Bank monitors the investment position of NRIs/FIIs in listed Indian companies, reported by designated banks, on a daily basis. When the total holdings of NRIs/FIIs under the Scheme reaches the limit of 2 percent below the sectoral cap, Reserve Bank will issue a notice (caution list) to all designated branches of designated banks cautioning that any further purchases of shares of the particular Indian company will require prior approval of the Reserve Bank. Once the shareholding by NRIs/FIIs reaches the overall ceiling / sectoral cap /statutory limit, the Reserve Bank places the company in the Ban List. Once a company is placed in the Ban List, no NRI can purchase the shares of the company under the Portfolio Investment Scheme. List of caution/banned RBI scrip is available at the RBI website.', 0, '8', 26, 0, '2015-09-27'),
(63, 'In case a person who is resident in India becomes a non-resident, will he/she be required to change the status of his/her holding from Resident to Non-Resident?', 'As per section 6(5) of FEMA, NRI can continue to hold the securities which he/she had purchased as a resident Indian, even after he/she has become a non resident Indian, on a non-repatriable basis.', 0, '8', 27, 0, '2015-09-27'),
(64, 'In case a non-resident Indian becomes a resident in India, will he/she be required to change the status of his/her holding from Non Resident to Resident?', 'Yes. It is the responsibility of the NRI to inform the change of status to the designated authorized dealer branch, through which the investor had made the investments in Portfolio Investment Scheme and the DP with whom he/she has opened the demat account. Subsequently, a new demat account in the resident status will have to be opened, securities should be transferred from the NRI demat account to resident account and then close the NRI demat account.', 0, '8', 28, 0, '2015-09-27'),
(65, 'In case a non-resident Indian becomes a resident in India or vice versa, will he/she be required to open a new trading account?', 'Yes, Trading member needs to open a new trading account which needs to be uploaded with the new category code (01 – Resident Individual) & (11 – NRI) as may be applicable.', 0, '8', 29, 0, '2015-09-27'),
(66, 'What is the National Pension System (NPS)?', 'NPS is a voluntary contribution of funds for a sustained period of time (till the age of 60 years) to enable you to draw pension after you attains 60 years of age. The scheme has been introduced by the Government of India and is monitered by the Pension Fund Regulatory and Development Authority.\r\n', 7, '5', 1, 0, '2015-10-01'),
(67, 'Who can subscribe / is covered by the NPS?', ' A. Employees who have joined Central Government service on or after January 01, 2004 who are eligible to a pension from the Consolidated Fund of India., <br>\r\nB. Any Indian citizen between the age of 18 and 60 years.\r\n ', 7, '5', 2, 0, '2015-10-01'),
(68, 'Can an NRI open an NPS account?', 'Yes, an NRI can open an NPS account. Contributions made by NRI are subject to regulatory requirements as prescribed by RBI and FEMA from time to time. If the subscriber\'s citizenship status changes, his/her NPS account would be closed.\r\n', 5, '5', 3, 0, '2015-10-01'),
(69, 'If I have invested in any other Provident Fund, can I still invest in NPS?', 'Yes. Investment in NPS is independent of your contribution to any Provident Fund.\r\n', 5, '5', 4, 0, '2015-10-01'),
(70, 'I have invested in pension funds of of non-government / private entities. Can I still invest in NPS?', 'Yes. Investment in NPS is independent of your subscription to any other pension fund.\r\n', 5, '5', 5, 0, '2015-10-01'),
(71, 'I have invested in pension funds of of non-government / private entities. Can I still invest in NPS?', 'Yes. Investment in NPS is independent of your subscription to any other pension fund.\r\n', 11, '5', 5, 0, '2015-10-01'),
(72, 'How and where can I open a NPS account?', 'NPS is distributed through authorized entities called Points of Presence (POP’s) and almost all the banks (both private and public sector) are enrolled to act as Point of Presence (POP) under NPS apart from several other financial institutions. To invest in NPS, you will be required to open a NPS account through the Point of Presence (POP) and who will assist the subscriber in opening the account including the filling up of necessary forms, providing the information about NPS and any other relevant information in this regard.\r\n', 0, '5', 6, 0, '2015-10-01'),
(73, 'Who is a POP/POP-SP and what is their role?', 'Points of Presence (POPs) are the first points of interaction of the NPS subscriber with the NPS architecture. The authorized branches of a POP, called Point of Presence Service Providers (POPSPs), will act as collection points and extend a number of customer services to NPS subscribers including requests for withdrawal from NPS.\r\n', 0, '5', 7, 0, '2015-10-01'),
(74, 'How can we find location/address of POP-SP nearest to the place where I live for opening a NPS account?', 'POP-SP location can be accessed through website of PFRDA. This can also be accessed through below mentioned link of CRA’s website: <br>\r\nhttps://www.npscra.nsdl.co.in/pop-sp.php\r\n', 0, '5', 8, 0, '2015-10-01'),
(75, 'What is CRA?', 'CRA stands for "Central Record Keeping Agency". It is managed by NSDL and its main function is record keeping, administration and customer service for all subscribers of the NPS.\r\n', 0, '5', 9, 0, '2015-10-01'),
(76, 'How will I know about the status of my PRAN application form?', 'Subscriber can check the status by accessing CRA website: https://cra-nsdl.com/CRA/ by using the 17 digit receipt number provided by POP-SP or the acknowledgement number allotted by CRA-FC at the time of submission of application forms by POP-SP. Once the PRAN is generated, an email alert as well as a SMS alert will be sent to the registered email ID and mobile number of the subscriber.\r\n', 0, '5', 10, 0, '2015-10-01'),
(77, 'What are the documents that need to be submitted for opening a NPS account?', 'The following documents need to be submitted to the POP for opening of a NPS account: a. Completely filled in subscriber registration form b. Proof of Identity c. Proof of Address d. Age/date of birth proof.\r\n', 0, '5', 11, 0, '2015-10-01'),
(78, 'What is Permanent Retirement Account Number?', 'Every individual subscriber is issued a Permanent Retirement Account Number (PRAN) card which is a 12-digit unique number.\r\n', 0, '5', 12, 0, '2015-10-01'),
(79, 'What if my PRAN card is lost or stolen?', 'In case of the PRAN card being lost or stolen, the same can be reprinted with additional charges.\r\n', 0, '5', 13, 0, '2015-10-01'),
(80, 'Do I get any receipt on submission of my application?', 'Yes, an email confirmation to registered email ID would be sent on successful acceptance of your application with the acknowledgement number generated by POP.\r\n', 0, '5', 14, 0, '2015-10-01'),
(81, 'How do I come to know about the PRAN?', 'Once the PRAN is generated, an email alert as well as a SMS alert will be sent to the registered email ID and mobile number of the subscriber. For security reason, only the last four digits are mentioned in the alert. Subscribers can know the PRAN on receipt of the PRAN Kit or they can also approach POP for the PRAN.\r\n', 0, '5', 15, 0, '2015-10-01'),
(82, 'What are the different accounts that can be opened under NPS?', 'Under NPS account, two sub-accounts – Tier I & II are provided. Tier I account is mandatory and the subscriber has option to opt for Tier II account opening and operation.\r\n', 11, '5', 16, 1, '2015-10-01'),
(83, 'What are Tier-I and Tier-II accounts?', 'The following are the salient features of these sub-accounts: Tier-I account: This is a non-withdrawable retirement account which can be withdrawn only upon meeting the exit conditions prescribed under NPS. Tier-II account: This is a voluntary savings facility available as an add-on to any Tier-1 account holder. Subscribers will be free to withdraw their savings from this account whenever they wish.\r\n', 0, '5', 17, 0, '2015-10-01'),
(84, 'Will the government also contribute anything to my NPS account?', 'No. The Government will not be making any contribution to your NPS account. The Government of India may however, make contributions to the accounts of NPS account holders who opt for Swavalamban scheme subject to conditions stated in Swavalamban scheme\r\n', 0, '5', 18, 2, '2015-10-01'),
(85, 'In what way is the NPS Portable?', 'The following are the portability features associated with NPS: <br>\r\n1. NPS account can be operated from anywhere in the country irrespective of individual employment and location/geography. <br>\r\n2. Subscribers can shift from one sector to another like Private to Government or vice versa or Private to Corporate and vice versa. <br>\r\nHence a private citizen can move to Central Government, State Government etc with the same Account. Also subscriber can shift within sector like from one POP to another POP and from one POP-SP to another POP-SP. Likewise an employee who leaves the employment to become a self-employed can continue with his individual contributions. If he enters re-employment he may continue to contribute and his employer may also contribute and so on. The subscriber can contribute to NPS from any of the POP/ POP-SP despite not being registered with them and from anywhere in India.\r\n', 0, '5', 19, 0, '2015-10-01'),
(86, 'Can I have more than one NPS account?', 'No, multiple NPS accounts for a single individual are not allowed and there is no necessity also as the NPS is fully portable across sectors and locations.\r\n', 0, '5', 20, 0, '2015-10-01'),
(87, 'What is the minimum and maximum age for opening an account?', 'The scheme is open to people between age 18 to 60 years.\r\n', 0, '5', 21, 0, '2015-10-01'),
(88, 'Are there any minimum annual contribution requirements under NPS?', '    The following table provides the complete information on the minimum contribution requirements: <br>\r\n<table width="100%" border="1" cellspacing="5" cellpadding="5" >\r\n  <tr>\r\n    <td style=\'border: 1px solid #212121;padding:5px;\'><center><b>For All citizens model</b><center></td>\r\n    <td style=\'border: 1px solid #212121;padding:5px;\'><center><b>Tier I</b></center></td>\r\n    <td style=\'border: 1px solid #212121;padding:5px;\'><center><b>Tier II</b></center></td>\r\n  </tr>\r\n  <tr>\r\n    <td style=\'border: 1px solid #212121;padding:5px;\'>Minimum Contribution at the time of account opening</td>\r\n    <td style=\'border: 1px solid #212121;padding:5px;\'> Rs. 500</td>\r\n    <td style=\'border: 1px solid #212121;padding:5px;\'> Rs. 1000</td>\r\n  </tr>\r\n  <tr>\r\n    <td style=\'border: 1px solid #212121;padding:5px;\'>Minimum amount per contribution</td>\r\n    <td style=\'border: 1px solid #212121;padding:5px;\'>Rs. 500</td>\r\n    <td style=\'border: 1px solid #212121;padding:5px;\'>Rs. 250</td>\r\n  </tr>\r\n  <tr>\r\n    <td style=\'border: 1px solid #212121;padding:5px;\'>Minimum total contribution in the year</td>\r\n    <td style=\'border: 1px solid #212121;padding:5px;\'>Rs. 6000</td>\r\n    <td style=\'border: 1px solid #212121;padding:5px;\'> Rs. 2000</td>\r\n  </tr>\r\n  <tr>\r\n    <td style=\'border: 1px solid #212121;padding:5px;\'>Minimum frequency of contributions</td>\r\n    <td style=\'border: 1px solid #212121;padding:5px;\'> 1 per year</td>\r\n    <td style=\'border: 1px solid #212121;padding:5px;\'> 1 per year</td>\r\n  </tr>\r\n</table>   ', 7, '5', 22, 0, '2015-10-01'),
(89, 'What is the maximum amount of contribution in a year?', 'No, there is no upper limit on maximum amount of contribution per year.\r\n', 3, '5', 23, 0, '2015-10-01'),
(90, 'How can I reactivate / unfreeze the account if frozen due to minimum contribution requirements?', 'If the minimum contribution amount is not contributed in a year, the account will be frozen. In order to unfreeze the account, the customer has to pay the total of minimum contributions for the period of freeze, the minimum contribution for the year in which the account is reactivated and a penalty of Rs.100/-. In order to unfreeze an account the subscriber has to approach the Point of Presence (POP) and pay the required amounts.\r\n', 0, '5', 24, 0, '2015-10-01'),
(91, 'How are the funds contributed by the subscribers managed under NPS?', 'The funds contributed by the Subscribers are invested by the PFRDA registered Pension Fund Managers (PFM’s) as per the investment guidelines provided by PFRDA. The investment guidelines are framed in such a manner that there is minimal impact on the subscribers contributions even if there is a market downturn by a judicious mix of investment instruments like Government securities, corporate bonds and equities. \r\n', 0, '5', 25, 0, '2015-10-01'),
(92, 'What are the names of PFM\'s registered with PFRDA for managing the subscriber\'s contribution?', 'At present there are 8 Pension Fund Managers (PFM’s) who manage the subscriber funds at the option of the subscriber. They are: <br>\r\nICICI Prudential Pension Fund <br>\r\nLIC Pension Fund <br>\r\nKotak Mahindra Pension Fund <br>\r\nReliance Capital Pension Fund <br>\r\nSBI Pension Fund <br>\r\nUTI Retirement Solutions Pension Fund <br>\r\nHDFC Pension Management Company <br>\r\nDSP BlackRock Pension Fund Managers \r\n', 0, '5', 26, 0, '2015-10-01'),
(93, 'What are the different Fund Management Schemes available to the subscriber?', 'The NPS offers two approaches to invest subscriber’s money: <br> \r\nActive choice – Individual Funds (Asset Class E, Asset Class C, and Asset Class G). <br>\r\nAuto choice - Lifecycle Fund- This is the default option under NPS and wherein the management of investment of funds is done automatically based on the age profile of the subscriber.\r\n', 0, '5', 27, 3, '2015-10-01'),
(94, 'What is Active choice option?', 'Here the individual have the option to actively decide as to how NPS pension wealth is to be invested in the following three options: <br>\r\n<br>\r\nAsset Class "E" - Investments in equity market instruments. <br>\r\nAsset Class "C" - Investments in fixed income instruments other than Government Securities. <br>\r\nAsset Class "G" - Investments in Government Securities. <br>\r\n<br>\r\nYou can choose to invest your entire pension wealth in Asset Class "C" or "G" and upto a maximum of 50% in Asset Class "E".\r\n', 0, '5', 28, 0, '2015-10-01'),
(95, 'What is Auto Choice - Life Cycle Fund?', 'Under this option, a pre-defined portfolio will determine the fraction of funds invested across three asst classes. At the lowest age of entry (18 years), the Auto Choice will entail investment of 50% of pension wealth in "E" Class, 30% in "C" Class and 20% in "G" Class. This ratio of investment will remain fixed for all contributions until the participant reaches the age of 36. From age 36 onwards, the weight in "E" and "C" Asset Class will decrease annually and the weight in "G" Class will increase annually till it reaches 10% in "E", 10% in "C" and 80% in "G" Class at age 55.\r\n', 0, '5', 29, 0, '2015-10-01'),
(96, 'On which date the reallocation among asset classes will take place under Auto Choice option?', 'The reallocation among the asset classes will take place on the date of birth of the subscriber.\r\n', 0, '5', 30, 0, '2015-10-01'),
(97, 'Can I select both investment choices when investing in NPS?', 'No. You have to select either Active Choice or Auto Choice as your investment option when making investments under NPS.\r\n', 0, '5', 31, 0, '2015-10-01'),
(98, 'Are the returns on my investment guaranteed?', 'No. The return on investment will be market-linked.\r\n', 0, '5', 32, 0, '2015-10-01'),
(99, 'What is the transaction cost to be borne by the subscriber?', '<table width="100%" border="1" cellspacing="5" cellpadding="5">\r\n  <tr>\r\n    <td style=\'border: 1px solid #212121;padding:5px;\'><center><b>Intermediary</b></center> </td>\r\n    <td style=\'border: 1px solid #212121;padding:5px;\'><center><b>Charge Head </b></center></td>\r\n    <td style=\'border: 1px solid #212121;padding:5px;\'><center><b>Service Charges </b></center></td>\r\n    <td style=\'border: 1px solid #212121;padding:5px;\'><center><b>Method of Deduction</b></center></td>\r\n  </tr>\r\n  <tr>\r\n    <td rowspan=\'4\' style=\'border: 1px solid #212121;padding:5px;\'><center>CRA</center> </td>\r\n    <td style=\'border: 1px solid #212121;padding:5px;\'><center>PRA Opening Charges </center></td>\r\n    <td style=\'border: 1px solid #212121;padding:5px;\'><center>Rs. 50/- </center></td>\r\n    <td rowspan=\'4\' style=\'border: 1px solid #212121;padding:5px;\'><center>Through cancellation of units at the end of each quarter.</center></td>\r\n  </tr>\r\n  <tr>\r\n    <td style=\'border: 1px solid #212121;padding:5px;\'><center>Annual PRA Maintenancecost per account</center></td>\r\n    <td style=\'border: 1px solid #212121;padding:5px;\'><center>Rs. 190/- </center></td>\r\n  </tr>\r\n  <tr>\r\n    <td style=\'border: 1px solid #212121;padding:5px;\'><center>Charge per transaction</center></td>\r\n    <td style=\'border: 1px solid #212121;padding:5px;\'><center>Rs. 4/- </center></td>\r\n  </tr>\r\n  <tr>\r\n    <td style=\'border: 1px solid #212121;padding:5px;\'><center>Initial subscriber registration</center></td>\r\n    <td style=\'border: 1px solid #212121;padding:5px;\'><center>Rs. 100/- </center> </td>\r\n  </tr>\r\n  <tr>\r\n    <td rowspan=\'3\' style=\'border: 1px solid #212121;padding:5px;\'><center>POP<br />Maximum Permissble charge for each subscriber </center></td>\r\n    <td style=\'border: 1px solid #212121;padding:5px;\'><center>Initial contribution upload </center></td>\r\n    <td style=\'border: 1px solid #212121;padding:5px;\'><center>0.25% of the initial contribution amount from subscriber subject to a minimum of Rs. 20/- and a maximum of Rs. 25,000/- </center> </td>\r\n    <td rowspan=\'3\' style=\'border: 1px solid #212121;padding:5px;\'><center>To be collected upfront</center> </td>\r\n  </tr>\r\n  <tr>\r\n    <td style=\'border: 1px solid #212121;padding:5px;\'><center>Any subsequent transaction involving contribution upload</center></td>\r\n    <td style=\'border: 1px solid #212121;padding:5px;\'><center>0.25% of the amount subscribed by the NPS subscriber subject to a minimum of Rs. 20/- and a maximum of Rs. 25,000/- </center></td>\r\n  </tr>\r\n  <tr>\r\n    <td style=\'border: 1px solid #212121;padding:5px;\'><center>Any other transaction not involving a contribution from subscriber</center></td>\r\n    <td style=\'border: 1px solid #212121;padding:5px;\'><center>Rs. 20/-</center> </td>\r\n  </tr>\r\n</table>', 2, '5', 33, 0, '2015-10-01'),
(100, 'Can I switch from one investment scheme to another and/or Pension Fund Manager?', '"Yes, NPS offers to its subscribers the option to change the scheme preference. Subscriber has\r\noption to realign his investment in asset class E, C and G based on age and future income \r\nrequirement. Also, the subscriber has option to change the PFM and the investment option\r\n(active /auto choice)."\r\n', 0, '5', 34, 0, '2015-10-01') ;
INSERT INTO `wp_ncl_nri_ques` ( `nri_ques_id`, `ques_name`, `ques_ans`, `ques_views`, `nri_fqsubcat_id`, `ques_position`, `home_ques_position`, `nri_faq_date`) VALUES
(101, 'Is there any default Pension Fund Manager (PFM) Option provided under NPS?', 'Yes, there is a default PFM provision under NPS and SBI Pension Funds Private Limited acts as the default Pension Fund Manager.\r\n', 0, '5', 35, 0, '2015-10-01'),
(102, 'Can I have a different Pension Fund Manager and Investment Option for my Tier I and Tier II account?', 'Yes. You may select different PFMs and Investment Options for your NPS Tier I and Tier II accounts.\r\n', 0, '5', 36, 0, '2015-10-01'),
(103, 'Can I appoint nominees for the NPS Tier I and Tier II Account?', 'Yes, you need to appoint a nominee at the time of opening of a NPS account in the prescribed section of the opening form. You can appoint up to 3 nominees for your NPS Tier I and NPS Tier II account. In such a case you are required to specify the percentage of your saving that you wish to allocate to each nominee. The share percentage across all nominees should collectively aggregate to 100%.\r\n', 0, '5', 37, 0, '2015-10-01'),
(104, 'I have not made any nomination at the time of registration. Can I nominate subsequently? What is the process?', 'If you have not made the nomination to your NPS account at the time of registration, you can do the same after the allotment of PRAN. You will have to visit your PoP and place Service Request to update nominations details.\r\n', 1, '5', 38, 0, '2015-10-01'),
(105, 'Can I change the Nominees for my NPS Accounts?', 'Yes. You can change the nominees in your NPS Tier I account at any time after you have received your PRAN.\r\n', 0, '5', 39, 0, '2015-10-01'),
(106, 'Are there any charges for making a nomination?', 'If you are making the nomination at the time of registering for PRAN, no charges will be levied to you. However, a subsequent request for nomination updation would be considered as a service request and you will be charged an amount which is presently Rs. 20/- plus applicable service tax for each request.\r\n', 2, '5', 40, 0, '2015-10-01'),
(107, 'What income tax reliefs are available to the individuals contributing to NPS?', 'Individual Subscriber (salaried as well as self employed) can avail of the tax benefits as mentioned below: <br>\r\n<br>\r\nFor Salaried individual- <br>\r\nEligible for tax deduction of up to 10% of Salary (Basic + Dearness Allowance) under section 80CCD (1) of Income Tax Act, 1961 within Rs.1.5Lacs limit under section 80CCE. <br>\r\n<br>\r\nFor Self employed- <br>\r\nEligible for tax deduction of up to 10% of Gross Income under section 80CCD (1) of Income Tax Act, 1961 within Rs.1.5Lacs limit under section 80CCE\r\nAs per the Finance Bill 2015, additional investment of Rs.50,000 will be eligible for tax deduction under section 80CCD (1B) of Income Tax Act, 1961. This benefit will be effective AY 2016 – 17.\r\n', 0, '5', 41, 0, '2015-10-01'),
(108, 'What are the applicable provisions for withdrawal of the accumulated pension wealth once I attain 60 years of age?', 'At least 40% of the accumulated pension wealth of the subscriber needs to be utilized for purchase of an annuity providing for the monthly pension of the subscriber and the balance is paid as a lump sum payment to the subscriber.\r\n', 0, '5', 42, 0, '2015-10-01'),
(109, 'What will happen to my savings if I decide to retire or does not want to continue in the NPS before age 60?', 'In such an eventuality, at least 80% of the accumulated pension wealth of the subscriber needs to be utilized for purchase of an annuity providing for the monthly pension of the subscriber and the balance is paid as a lump sum payment to the subscriber.\r\n', 0, '5', 43, 0, '2015-10-01'),
(110, 'In the event of the death of subscriber before attaining the age of 60 years, what will be the benefit that is payable and who will get the benefits ?', 'In the unfortunate event of death of the subscriber, the entire accumulated pension wealth (100%) would be paid to the nominee / legal heir of the subscriber and there would not be any purchase of annuity/monthly pension.\r\n', 0, '5', 44, 0, '2015-10-01'),
(111, 'How to withdraw the benefits available under NPS?', 'The subscriber wishing to exit from NPS has to submit a withdrawal application form to the concerned POP along with the documents specified for withdrawal of the benefits and the POP in turn would authenticate the documents and forwards them to CRA M/s NSDL. CRA in turn would register your claim and forward you the necessary application form along with the procedure to be followed and documents that need to be submitted. Once the documents are received, CRA processes the application and settles the account.\r\n', 0, '5', 45, 0, '2015-10-01'),
(112, 'What are the documents that need to be submitted along with the withdrawal forms?', 'Following documents are required to be submitted along with the withdrawal forms in order to settle the claims: <br>\r\n<br>\r\n1. PRAN card in original <br>\r\n2. Attested copy of Proof of Identity (e. g. Passport, Aadhar Card, PAN Card, Valid Driving License, Voter ID Card etc.) <br>\r\n3. Attested copy of Proof of Address (e. g. Passport, Aadhar Card, Valid Driving License, Voter ID Card etc.) <br>\r\n4. Cancelled cheque (containing Subscriber Name, Bank Account Number and IFS Code) or Bank Certificate Containing Name, Bank Account Number and IFSC code, for direct credit or electronic transfer. \r\n', 0, '5', 46, 0, '2015-10-01'),
(113, 'Can a NPS subscriber defer his lump sum withdrawable amount (up to 60%) under NPS at the time of exit on 60 years?', 'Yes, one can defer the withdrawal of the eligible lump sum amount payable under NPS till the age of 70 years.\r\n', 0, '5', 47, 0, '2015-10-01'),
(114, 'What will happen to my withdrawal if my PRAN is in frozen or inactive state at the time of withdrawal?', 'The withdrawal will be processed like a normal withdrawal but in addition deduct the penalty that is applicable for unfreezing of such an account without seeking to reactivate the account by the subscriber or payment of amounts necessary to activate the account. In essence, the CRA will unfreeze the account by charging the penalty applicable and process the withdrawal claim.\r\n', 0, '5', 48, 0, '2015-10-01'),
(115, 'What are the Annuity Service Providers under NPS and what are their names?', 'Indian Life Insurance companies which are licensed by Insurance Regulatory and Development Authority (IRDA) are empanelled by PFRDA to act as Annuity Service Provider’s to provide annuity services to the subscribers of NPS. Currently, the following are the ASPs empanelled by PFRDA: <br>\r\n<br>\r\n1. Life Insurance Corporation of India <br> \r\n2. SBI Life Insurance Co. Ltd. <br>\r\n3. ICICI Prudential Life Insurance Co.  Ltd. <br>\r\n 4. Bajaj Allianz Life Insurance Co. Ltd. <br>\r\n 5. Star Union Dai-ichi Life Insurance Co. Ltd. <br>\r\n6. Reliance Life Insurance Co. Ltd. <br>\r\n7. HDFC Standard Life Insurance Co. Ltd <br>\r\n<br>\r\nNote: The ASP empanelment process is an ongoing process and the list of ASPs may grow in future.\r\n', 0, '5', 49, 0, '2015-10-01'),
(116, 'What are the factors that determine the annuity income when you buy an annuity?', 'The Size of your pension wealth/corpus determines your monthly annuity/pension that you receive. Bigger the accumulated pension wealth or corpus used for purchase of annuity, the bigger would be the monthly pension that is received. Besides that, amount of annuity may vary according to the type of annuity variant selected by the subscriber.\r\n', 0, '5', 50, 0, '2015-10-01'),
(117, 'What is the default annuity scheme and default ASP under NPS?', 'The following default annuity service provider along with the annuity scheme is available to all the subscribers under National Pensions System: <br>\r\n<br>\r\n 1. Default Annuity Service Provider – Life Insurance Corporation of India (LIC) <br> \r\n2. Default Annuity Scheme - Annuity for life with a provision of 100% of the annuity payable to spouse during his/her life on death of annuitant’ and under this option, payment of monthly annuity would cease once the annuitant and the spouse die or after death of the annuitant if the spouse pre-deceases the annuitant, without any return of purchase price.\r\n', 0, '5', 51, 0, '2015-10-01'),
(118, 'Can I use more than 40% of my accumulated pension wealth to purchase the annuity at the time of exit from NPS upon attaining the age of 60 years?', 'Yes, a subscriber at the time of attaining the age of 60 years can purchase annuity up to 100% of his accumulated pension wealth.\r\n', 0, '5', 52, 0, '2015-10-01'),
(119, 'Can a NPS subscriber defer his annuity purchase under NPS at the time of exit on 60 years?', 'Yes, one can defer the mandatory purchase of annuity for a maximum period of 3 years, at the time of exit from NPS.\r\n', 0, '5', 53, 0, '2015-10-01'),
(120, 'How the annuity OR monthly pension is paid?', 'Monthly pension /Annuity will be paid through direct bank transfer to the specified subscribers account only through Annuity Service Providers.\r\n', 0, '5', 54, 0, '2015-10-01'),
(121, 'To whom and how shall I report any grievance on the services provided?', ' The subscriber can raise grievance through any of the modes mentioned below: <br>\r\n<br>\r\n<b>Call Centre/Interactive Voice Response System (IVR) : </b> <br>\r\nThe Subscriber can contact the CRA call center at toll free telephone number 1-800-222080 and register the grievance by using T-PIN. <br>\r\nDedicated Call center executives. <br>\r\n<br>\r\n <b>Physical forms direct to CRA: </b><br>\r\nThe Subscriber may submit the grievance in a prescribed format to the POP – SP who would forward it to CRA Central Grievance Management System (CGMS). <br>\r\n Subscriber can directly send form to CRA. <br>\r\n<br>\r\n<b>Web based interface: </b> <br>\r\nThe Subscriber may register the grievance at the website www.npscra.nsdl.co.in with the use of the I-pin allotted at the time of opening a Permanent Retirement Account.\r\n ', 1, '5', 55, 0, '2015-10-01'),
(122, 'Can an NRI/PIO invest in mutual funds in India?', ' Yes. <br>\r\nNote: U.S. Persons and Persons of Canada”are not allowed to make any purchase in any mutual fund in India.', 2, '7', 1, 0, '2015-10-03'),
(123, 'Does an NRI need to take RBI permission before investing in mutual funds?', 'No. NRIs do not need to take RBI permission for investing in mutual funds. They can invest through repatriable or non repatriable basis.', 0, '7', 2, 1, '2015-10-03'),
(124, 'How investment can be made on Repatriable basis?', 'To invest on a repatriable basis, NRI investor must have an NRE or FCNR Bank Account in India. The Reserve Bank of India (RBI) has granted a general permission to Mutual Funds to offer mutual fund schemes on repatriation basis, subject to the following conditions : <br>\r\n<br>\r\n•	The amount representing investment should be received by inward remittance through normal banking channels, or by debit to an NRE / FCNR account of the non-resident investor. <br>\r\n•	The net amount representing the dividend / interest and maturity proceeds of units may be remitted through normal banking channels or credited to NRE / FCNR account of the investor, as desired by him subject to payment of applicable tax.', 4, '7', 3, 0, '2015-10-08'),
(125, 'How investment can be made on Non-repatriable basis?', 'The Reserve Bank of India (RBI) has granted a general permission to Mutual Funds to offer mutual fund schemes on non-repatriation basis, subject to the following conditions : <br>\r\n<br>\r\n•	Funds for investment should be provided by debit to NRO account of the NRI/ FII investor. Alternatively, funds may be invested by inward remittance or by debit to NRE / FCNR Account. <br>\r\n•	No permission of Reserve Bank either by the Mutual Fund or the NRI investor is necessary.', 0, '7', 4, 0, '2015-10-08'),
(126, 'Can an NRI invest in foreign currency?', 'An NRI cannot make the investment in foreign currency. He needs to give a Rupee cheque from his NRE, NRO bank account in India. He may also send a Rupee cheque from abroad payable in a bank in India. However, for an NRI to invest, it is mandatory that he maintains a bank account in India.', 6, '7', 5, 2, '2015-10-08'),
(127, 'What is the mode of payment for Repatriation and Non- Repatriation basis?', 'Repatriable Basis: Payments for the purchase of the units may be made by Indian Rupee drafts purchased abroad, or by cheques drawn on the NRE/FCNR Account of the investor. <br>\r\n<br>\r\nNon-Repatriable Basis: Payments for the purchase of the units may be made by Indian Rupee drafts purchased abroad, or by cheques / demand drafts drawn on the NRE / FCNR / NRO account of the investor.', 0, '7', 6, 0, '2015-10-08'),
(128, 'Will the Mutual Fund Ccompany accept an NRI application with an overseas bank account detail?', 'No.', 0, '7', 7, 0, '2015-10-08'),
(129, 'What address should be mentioned on the application form? Can an NRI mention a local address for all communication?', 'The Overseas address is mandatory for NRI Investors. The Local address is optional and can be given as a communication address.', 0, '7', 8, 0, '2015-10-08'),
(130, '  How will the redemption proceeds be paid?', ' Redemption proceeds may be paid by cheque. The cheque will be payable to the first unitholder and will include the bank account number. Alternatively the redemption proceeds may be credited directly to the investor’s (Unit Holder/ First Holder in the folio) bank account. \r\nRedemption proceeds/repurchase price and/or dividend or income earned (if any) will be payable in Indian Rupees only. The Mutual Fund company will not be liable for any loss due to exchange fluctuations, while converting the Rupee amount into US Dollar or any other currency. ', 0, '7', 9, 0, '2015-10-08'),
(131, 'How can the redemption proceeds be repatriated?', ' The investments shall carry the right of repatriation of capital invested and capital appreciation so long as the investor continues to be a resident outside India.\r\nWhere the investment is made out of inward remittance or from funds held in the NRE/FCNR account of the investor, the maturity proceeds/repurchase price of units (after payment of taxes) may be credited to the NRE/FCNR account of the non-resident investor maintained with an authorised dealer(Bank) in India. ', 0, '7', 10, 0, '2015-10-08'),
(132, 'What about redemption preceeds where investments were made on a non-repatriable basis?', ' Where the purchase of units is made on a non-repatriable basis, the maturity proceeds/repurchase price of units (after payment of taxes) will not qualify for repatriation and may be credited to the NRO account of the non-resident investor. <br>\r\nSimilarly, investments in units purchased in Rupees, where the investor was a resident of India and subsequently becomes a non-resident, will not qualify for repatriation of repurchase proceeds of units. <br>\r\nThe entire income distribution on the investment will, however, qualify for full repatriation. ', 0, '7', 11, 0, '2015-10-08'),
(133, 'Will the AMC transfer money to an investor’s overseas account?', 'Will the AMC transfer money to an investor’s overseas account?', 0, '7', 12, 0, '2015-10-08'),
(134, 'What will be the tax liability on redemptions?', '  <table width="100%" border="1" cellspacing="5" cellpadding="5">\r\n  <tr>\r\n    <td style=\'border: 1px solid #212121;padding:5px;\'><center><b>Scheme</b></center></td>\r\n    <td style=\'border: 1px solid #212121;padding:5px;\'><center><b>Long Term Capital Gains***</b></center></td>\r\n    <td style=\'border: 1px solid #212121;padding:5px;\'><center><b>Short Term Capital Gains***</b></center></td>\r\n    <td style=\'border: 1px solid #212121;padding:5px;\'><center><b>Dividend Distribution Tax $</b></center></td>\r\n  </tr>\r\n  <tr>\r\n    <td style=\'border: 1px solid #212121;padding:5px;\'><center>Equity Schemes (Listed)</center></td>\r\n    <td style=\'border: 1px solid #212121;padding:5px;\'><center>Nil</center></td>\r\n    <td style=\'border: 1px solid #212121;padding:5px;\'><center>15% + 12% Surcharge + 3% Cess = 17.3040%</center></td>\r\n    <td style=\'border: 1px solid #212121;padding:5px;\'><center>Nil</center></td>\r\n  </tr>\r\n  <tr>\r\n    <td style=\'border: 1px solid #212121;padding:5px;\'><center>Equity Schemes (Unlisted)</center></td>\r\n    <td style=\'border: 1px solid #212121;padding:5px;\'><center>Nil</center></td>\r\n    <td style=\'border: 1px solid #212121;padding:5px;\'><center>15% + 12% Surcharge + 3% Cess = 17.3040%</center></td>\r\n    <td style=\'border: 1px solid #212121;padding:5px;\'><center>Nil</center></td>\r\n  </tr>\r\n  <tr>\r\n    <td style=\'border: 1px solid #212121;padding:5px;\'><center>Debt Schemes (Listed)</center></td>\r\n    <td style=\'border: 1px solid #212121;padding:5px;\'><center>20% with indexation + 12% Surcharge + 3% Cess = 23.0720%</center></td>\r\n    <td style=\'border: 1px solid #212121;padding:5px;\'><center>As per Slab rates + 12% Surcharge + 3% Cess</center></td>\r\n    <td style=\'border: 1px solid #212121;padding:5px;\'><center>25% + 12% Surcharge + 3% Cess</center></td>\r\n  </tr>\r\n  <tr>\r\n    <td style=\'border: 1px solid #212121;padding:5px;\'><center>Debt Schemes (Unlisted)</td>\r\n    <td style=\'border: 1px solid #212121;padding:5px;\'><center>10% with indexation + 12% Surcharge + 3% Cess = 11.5360%</center></td>\r\n    <td style=\'border: 1px solid #212121;padding:5px;\'><center>As per Slab rates + 12% Surcharge + 3% Cess</center></td>\r\n    <td style=\'border: 1px solid #212121;padding:5px;\'><center>25% + 12% Surcharge + 3% Cess</center></td>\r\n  </tr>\r\n    <tr>\r\n    <td colspan="4" style=\'font-size:13px;\'><b>***</b> In order to qualify as long-term capital asset, the units of mutual funds (other than units of an equity oriented fund) should be held for a period <br /><b>$</b> For the purpose of determining the dividend distribution tax payable, the amount of distributed income shall be increased to such amount as would, after reduction of the dividend distribution tax on such increased amount at the specified tax rates, be equal to the amount of income distributed by the Mutual Fund.</td>\r\n  </tr>\r\n</table>  ', 3, '7', 13, 0, '2015-10-08'),
(135, 'What will be the tax liability for income received from your mutual funds?', 'As per Section 10(35) of the Income Tax Act, 1961, income received from mutual fund units specified under Section 10(23D) is exempt from income tax in India and the mutual funds are subject to deduction of distribution tax in debt oriented schemes. Hence all dividends are tax-free in the hands of non-resident investors and no TDS is applicable on the same.', 0, '7', 14, 0, '2015-10-08'),
(136, 'What is the proof of the Tax Deduction at Source?', 'A TDS certificate is issued in the name of the Unit holder / First holder mentioning the details of the transaction and the tax deducted. The TDS certificate is commonly known as Form16A.', 0, '7', 15, 0, '2015-10-08'),
(137, 'When will the TDS certificate be issued?', 'The digitally signed TDS Certificates (Form 16A) are depatched to the investors once in a quarter.\r\nHowever, the same may vary from AMC to AMC.', 0, '7', 16, 0, '2015-10-08'),
(138, 'Is the indexation benefit available to NRIs?', 'Yes, if units are held for more than 12 months i.e. on long-term capital gains.', 0, '7', 17, 0, '2015-10-08'),
(139, 'Can an NRI fax a request followed by the original documents?', 'No, Units cannot be redeemed or allotted on the basis of fax applications. A request that lacks a valid signature cannot be processed/accepted.', 0, '7', 18, 0, '2015-10-08'),
(140, 'Can a Power of Attorney (POA) invest on behalf of the NRI investor?', 'Yes, in a mutual fund the POA has the authority to invest on behalf of the investor and sign documents for initial and additional purchases as well as redemptions. <br>\r\nWhile applying for purchase of units the POA holder needs to submit the original POA or a copy duly notarised should be submitted. The Power of attorney should contain the signature of both the first holder and the POA holder. Only when the POA is registered does the POA holder have the right to transact on behalf of the NRI investor. His signature will be verified for processing any transaction/request.', 0, '7', 19, 0, '2015-10-08'),
(141, 'Is nominations by NRIs allowed?', 'Yes. It is allowed only for individual NRIs.', 0, '7', 20, 0, '2015-10-08'),
(142, 'Can a resident Indian have an NRI as nominee?', 'Yes, The same rules apply for nominees to resident Indian folio(s). An NRI can be a nominee to an folio(s) which is in the name of a resident Indian.', 0, '7', 21, 0, '2015-10-08'),
(143, 'Can an NRI invest in mutual funds in a joint name with a resident Indian?', 'Yes. An NRI investor can have a joint holding with a Resident Indian or a Non-Resident Indian.', 0, '7', 22, 3, '2015-10-08'),
(144, 'How are mutual funds different from Portfolio Management Schemes?', 'In Mutual Funds, the investments of investors are pooled to form a common investible corpus and the gain/loss to all investors during a given period are same for all investors. In the case of portfolio management schemes, the investments of a particular investor remain identifiable to him. Here the gain or loss of investors will be different from each other.', 0, '7', 23, 0, '2015-10-08'),
(145, 'What is a mutual fund?', 'A mutual fund is a financial instrument that collects money from several investors like you, and invests it in various investment options like shares, bonds, etc. This fund is managed by experts.', 0, '2', 1, 0, '2015-10-09'),
(146, 'What are the types of mutual funds?', 'Depending on where your money is invested, mutual funds can be classified into three types: Equity, Debt and Hybrid. Equity mutual funds invest in shares of companies listed on the stock exchange. Debt mutual funds invest in bonds of reputed companies and government bonds. Hybrid mutual funds invest in both, shares and bonds.', 0, '2', 2, 0, '2015-10-09'),
(147, 'What is an AMC?', 'AMC or Asset Management Company is the company that runs and manages mutual funds.', 0, '2', 3, 0, '2015-10-09'),
(148, 'Who are fund managers?', 'Fund managers are experts who have their pulse on the market and decide on the right pick of stocks, debentures, debt instruments, government securities among others to maximize gains on your investment.', 0, '2', 4, 0, '2015-10-09'),
(149, 'How does a mutual fund operate?', 'A mutual fund company collects money from many investors, and invests it in various options like shares, bonds, etc. This fund is managed by professionals who understand the market well, and try to achieve growth by making strategic investments. Investors get units of the mutual fund according to the amount they have invested.', 0, '2', 5, 0, '2015-10-09'),
(150, 'How different are mutual funds from other investment avenues?', ' In case of other investment avenues such as fixed deposits, post office savings, PPF, etc. you\'re almost certain about the amount you would be receiving on maturity. The risk is low and you receive returns accordingly. But with mutual funds the returns are not assured since they are linked to the stock market. Stock market investments would mean taking on high risk. But since mutual funds spread the risk among several investors like you, individually you would take on low risk and rake in stock market related returns.', 0, '2', 6, 0, '2015-10-09'),
(151, 'What are the benefits of investing in a mutual fund?', 'Some of the major benefits on investing in a mutual fund are: - Diversification - Professional management - Convenience - Liquidity - Variety of schemes and types - Tax benefits.', 0, '2', 7, 0, '2015-10-09'),
(152, 'How risky is mutual fund investing?', 'Mutual funds invest in a variety of financial instruments such as equities, debt, government securities to name a few. Note that the value of these investments could fluctuate, thereby influencing your mutual fund NAV. But since the risk is spread among a large pool of individuals you individually take on low risk through diversification and rake in high returns.', 0, '2', 8, 0, '2015-10-09'),
(153, 'Do I need a demat account to invest in mutual funds?', 'Except for Exchange Traded Funds you do not need a demat account to invest in mutual funds.', 0, '2', 9, 0, '2015-10-09'),
(154, 'Can NRIs invest in mutual funds?', '   Yes. NRIs can invest in mutual funds. <a href=\'http://dalmiaadvisory.com/all-faq/?page=&subcatid=7\'>Click here</a> for more details\r\n   ', 2, '2', 10, 0, '2015-10-09'),
(155, 'Is there any lock-in period in mutual funds?', 'If you\'re looking at investing in equity linked saving schemes (ELSS) the lock in period is three years, which means your money will remain locked in with the mutual fund company for a period of three years.\r\n', 0, '2', 11, 0, '2015-10-09'),
(156, 'What are the factors that influence the performance of Mutual Funds?', 'The performances of Mutual funds are influenced by the performance of the stock market as well as the economy as a whole. Equity Funds are influenced to a large extent by the stock market. The stock market in turn is influenced by the performance of the companies as well as the economy as a whole. The performance of the sector funds depends to a large extent on the companies within that sector. Bond-funds are influenced by interest rates and credit quality. As interest rates rise, bond prices fall, and vice versa. Similarly, bond funds with higher credit ratings are less influenced by changes in the economy. \r\n', 2, '2', 12, 0, '2015-10-09'),
(157, 'What is NFO?', 'NFO stands for a New Fund Offer. When a new fund is launched for investors, it is known as a NFO. A NFO could also be the launch of additional units of a close-ended fund.\r\n', 0, '2', 13, 0, '2015-10-09'),
(158, ' What is an offer document?', 'An offer document provides details about a new mutual fund scheme entering the market. It provides information on the features of the scheme, risk factors, loads - entry or exit load, the track record of the mutual fund company among others.\r\n', 0, '2', 14, 0, '2015-10-09'),
(159, 'What is Key Information Memorandum (KIM)?', 'KIM or Key Information Memorandum provides detailed performance related information on the several schemes of a mutual fund company. So before you invest in any scheme you can have a look at the various scheme performances and take an informed decision. But always remember that a fund\'s past performance is no guarantee of its future success .\r\n', 0, '2', 15, 0, '2015-10-09'),
(160, 'What is a Fund of Funds?', ' A fund of fund is a kind of mutual fund that invests in a variety of mutual fund schemes. ', 6, '2', 16, 0, '2015-10-09'),
(161, 'What are equity mutual funds?', 'Equity mutual funds collect money from several investors like you, and invest this amount in shares of various companies. The primary objective of equity mutual funds is to invest in shares of different companies and generate good returns.', 0, '2', 17, 0, '2015-10-09'),
(162, 'What are debt mutual funds?', 'Debt mutual funds collect money from several investors like you, and invest this amount in bonds of reputed companies and government bonds.', 0, '2', 18, 0, '2015-10-09'),
(163, 'What are hybrid mutual funds?', 'Hybrid mutual funds invest both in shares and bonds. The portion invested in shares helps grow your wealth, while the portion invested in bonds offers stability to your portfolio.', 0, '2', 19, 0, '2015-10-09'),
(176, 'What are Exchange Traded Funds?', 'Exchange Traded Funds (ETFs) are funds that can be traded on a stock exchange, just like shares. These funds invest in shares, indexes or commodities.\r\n', 0, '2', 20, 0, '2015-10-09'),
(177, 'What are index funds?', 'Index funds are mutual funds that invest in shares of companies comprising a particular index. These funds intend to replicate the performance of a particular index.\r\n', 0, '2', 21, 0, '2015-10-09'),
(178, 'What are gilt funds?', 'A gilt fund is a kind of mutual fund that invest your money only in government securities. These funds are considered to be safe as they bear no default risk.\r\n', 0, '2', 22, 0, '2015-10-09'),
(179, 'What are sectoral mutual funds?', 'Sectoral mutual funds invest your money in shares of companies of one particular sector. The main objective of these funds is to provide high returns from one particular sector that has the potential to grow.\r\n', 0, '2', 23, 0, '2015-10-09'),
(180, 'What are liquid funds?', 'Liquid funds are mutual funds that offer high liquidity. This means, the units of these funds can be sold immediately, and the invested amount can be redeemed quickly.\r\n', 0, '2', 24, 0, '2015-10-09'),
(181, 'What are capital protection funds?', 'Capital protection funds are mutual funds designed to protect your capital. These funds put a major portion of the investment in bonds, and a small portion in shares. Over time, the portion invested in bonds grows to the size of your original investment. So even if the portion invested in shares does not do well, your capital is still protected.\r\n', 0, '2', 25, 0, '2015-10-09'),
(182, 'What are ELSS funds?', 'Equity Linked Saving Schemes (ELSS) are tax saving mutual fund schemes that enable you to get tax benefits under Section 80C of the Income Tax Act. Investment in these funds have a lock-in-period of three years. \r\n', 1, '2', 26, 0, '2015-10-09'),
(183, 'What is an open-ended mutual fund?', 'Open-ended funds can be bought and sold at any time; they have no fixed tenure.\r\n', 0, '2', 27, 0, '2015-10-09'),
(184, 'What is a close-ended mutual fund?', 'You can buy units of close-ended mutual funds only when a mutual fund company launches the fund. Once you buy them, you have to hold your investment for a fixed tenure.\r\n', 0, '2', 28, 0, '2015-10-09'),
(185, 'What is a Systematic Investment Plan (SIP)?', 'A Systematic Investment Plan (SIP) is a convenient method of investing in mutual funds. Under this plan, an investor contributes a fixed amount towards the mutual fund scheme at regular intervals, and gets units at the prevailing NAV.\r\n', 0, '2', 29, 0, '2015-10-09'),
(186, 'What are the benefits of investing in a SIP?', 'Investing in SIP offers two major benefits: - <br>\r\n1. You can start investing with a small amount, and <br>\r\n2. You can average out your investment, as SIP involves buying units at different points of time and at different NAV levels.\r\n', 0, '2', 30, 0, '2015-10-09'),
(187, 'What is rupee cost averaging?', 'Rupee cost averaging is one method to save regularly and minimize the effect of market volatility on investments. By investing through methods like SIP, you invest a fixed amount in mutual funds at regular intervals. So, you get more units when the NAV is low and fewer units when it is high. Eventually, your average cost per unit is brought down.\r\n', 0, '2', 31, 0, '2015-10-09'),
(188, 'What is a Systematic Withdrawal Plan (SWP)?', 'Under a Systematic Withdrawal Plan (SWP), an investor redeems a fixed number of mutual fund units at regular intervals.\r\n', 0, '2', 46, 0, '2015-10-09'),
(189, 'What is Net Asset Value (NAV)?', 'Net Asset Value (NAV) refers to the price of one unit of a mutual fund scheme.\r\n', 0, '2', 51, 0, '2015-10-09'),
(190, 'How is NAV calculated?', 'NAV can be calculated as follows:- <br>\r\n(Assets of the fund – Liabilities of the fund) / Number of units outstanding for that fund.\r\n', 0, '2', 52, 0, '2015-10-09'),
(191, 'How often is the NAV of a fund declared?', 'NAV is required to be disclosed by the mutual funds on a regular basis - daily or weekly - depending on the type of scheme.\r\n', 0, '2', 53, 0, '2015-10-09'),
(192, 'What is Exit Load?', 'The non refundable fee paid to the Asset Management Company at the time of redemption/ transfer of units between schemes of mutual funds is termed as exit load. It is deducted from the NAV(selling price) at the time of such redemption/ transfer.\r\n', 0, '2', 54, 0, '2015-10-09'),
(193, 'What is a sales price?', 'The price or NAV a unitholder is charged while investing in an open-ended scheme is called sales price. It may include sales load, if applicable.\r\n', 0, '2', 55, 0, '2015-10-09'),
(194, 'What is a repurchase/redemption price?', 'Repurchase or redemption price is the price or NAV at which an open-ended scheme purchases or redeems its units from the unitholders. It may include exit load, if applicable.\r\n', 0, '2', 56, 0, '2015-10-09'),
(195, 'What is a Switch?', 'Some Mutual Funds provide the investor with an option to shift his investment from one scheme to another within that fund. For this option the fund may levy a switching fee. Switching allows the Investor to alter the allocation of their investment among the schemes in order to meet their changed investment needs, risk profiles or changing circumstances during their lifetime.\r\n', 0, '2', 57, 0, '2015-10-09'),
(196, 'How do I choose the right fund?', 'You may choose the right mutual fund on the basis of: <br>\r\n<br>\r\n•	Your Age <br>\r\n•	Time horizon: The amount of time you plan to remain invested <br>\r\n•	Risk profile: The amount of risk you are comfortable taking with your investments <br>\r\n•	Asset allocation: Diversifying your investments to bring down the inherent risk in each asset class <br>\r\n•	Background of the mutual fund company <br>\r\n•	The track record of the scheme over a period of time <br>\r\n', 0, '2', 58, 0, '2015-10-09'),
(197, 'Will I get a portfolio of what the mutual fund company is buying and selling?', 'Mutual fund companies send newsletters and information on their portfolio details to investors on a regular basis. In case you\'ve not received the same, you may access the portfolio details on the respective mutual fund website.\r\n', 0, '2', 59, 0, '2015-10-09'),
(198, 'What is a Nomination?', 'An investor can nominate person(s) called nominee(s) to whom his/her Mutual fund Units will\r\nbe transferred on his/ her demise. The units will get transferred to the nominee in case of Single holding or Joint holding in the following manner:- <br>\r\n<br>\r\n•  Single holding of units in the folio: The Mutual Funds units will get transferred in the name of the registered nominee on the demise of the Single (primary) holder. <br>\r\n•  Joint Holding or more than one unit holder in a folio: The Mutual Funds units will get transferred in the name of the registered nominee on the demise of both the joint holder(s).', 0, '2', 60, 0, '2015-10-09'),
(200, 'What are the benefits of registering a nomination?', 'Registration of nomination will facilitate easy transfer of funds to the nominee(s) on the demise of the Investor. However, in the absence of nominee, a claimant would have to\r\nproduce a host of documents like a Will, Legal heir Certificate, No-objection Certificate from other legal heirs etc. to get the units transferred in his/her name. \r\n', 0, '2', 61, 0, '2015-10-09'),
(201, 'What is the amount of TDS deducted?', ' <table width="100%" border="1" cellspacing="5" cellpadding="5">\r\n  <tr>\r\n    <td> </td>\r\n    <td><center><b>Short Term Capital Gains</b></center></td>\r\n    <td><center><b>Long Term Capital Gains</b></center></td>\r\n  </tr>\r\n  <tr>\r\n    <td style=\'border: 1px solid #212121;padding:5px;\'><center>Equity oriented Schemes (Listed)</center></td>\r\n    <td style=\'border: 1px solid #212121;padding:5px;\'><center>15% + 12% Surcharge + 3% Cess = 17.3040%</center></td>\r\n    <td style=\'border: 1px solid #212121;padding:5px;\'><center>Nil</center></td>\r\n  </tr>\r\n  <tr>\r\n    <td style=\'border: 1px solid #212121;padding:5px;\'><center>Equity oriented Schemes (Unlisted)</center></td>\r\n    <td style=\'border: 1px solid #212121;padding:5px;\'><center>15% + 12% Surcharge + 3% Cess = 17.3040%</center></td>\r\n    <td style=\'border: 1px solid #212121;padding:5px;\'><center>Nil</center></td>\r\n  </tr>\r\n  <tr>\r\n    <td style=\'border: 1px solid #212121;padding:5px;\'><center>Other than Equity oriented schemes (Listed)</center></td>\r\n    <td style=\'border: 1px solid #212121;padding:5px;\'><center>30% + 12% Surcharge + 3% Cess = 34.6080%</center></td>\r\n    <td style=\'border: 1px solid #212121;padding:5px;\'><center>20% with indexation + 12% Surcharge + 3% Cess = 23.0720%</center></td>\r\n  </tr>\r\n\r\n  <tr>\r\n    <td style=\'border: 1px solid #212121;padding:5px;\'><center>Other than Equity oriented schemes (Unlisted)</center></td>\r\n    <td style=\'border: 1px solid #212121;padding:5px;\'><center>30% + 12% Surcharge + 3% Cess = 34.6080%</center></td>\r\n    <td style=\'border: 1px solid #212121;padding:5px;\'><center>10% without indexation + 12% Surcharge + 3% Cess = 11.5360%</center></td>\r\n  </tr>\r\n</table> ', 0, '7', 14, 0, '2015-10-10'),
(202, 'Can I make a nomination for the mutual fund units purchased?', 'Yes. You can make nomination for your Mutual Fund units purchased.\r\n', 0, '2', 62, 0, '2015-10-10'),
(203, 'Can a nominee be appointed in on behalf of minor folio?', 'No nominee can be registered under on behalf of minor account. \r\n', 1, '2', 63, 0, '2015-10-10'),
(204, 'Can I cancel / change a nomination made by me?', 'Yes. You can cancel / change  your existing nomination at any time before you redeem your mutual fund units.\r\n', 0, '2', 64, 0, '2015-10-10'),
(205, 'What is the effect of making a nomination?', 'Nomination causes all rights and/or amount(s) payable in respect of your Mutual Fund Holdings to vest in and be transferred to your nominee upon your death. If your legal heir is different from your nominee, your legal heir cannot dispute this action as transfer by the respective AMC(s) in favour of a Nominee acts as valid discharge by the AMC(s) against the legal heir of the deceased holder.\r\n', 0, '2', 65, 0, '2015-10-10'),
(206, 'Who can make a nomination?', 'Investors in the Category of "Individuals" are permitted to make a nomination for their mutual fund units. Non-individuals including society, trust, body corporate, partnership firm, Karta of Hindu Undivided Family and a holder of Power of Attorney are not allowed to nominate.\r\n', 0, '2', 66, 0, '2015-10-10'),
(207, 'Whom can I nominate?', 'You can nominate any individual as your nominee. However, you cannot nominate the following as your nominee with regard to your mutual fund units: <br>\r\na.	A Trust <br>\r\nb.	A Society <br>\r\nc.	A Body Corporate <br>\r\nd.	A Partnership Firm <br>\r\ne.	Karta of a Hindu Undivided Family <br>\r\nf.	A Power of Attorney Holder\r\n', 0, '2', 67, 0, '2015-10-10'),
(208, 'Can I nominate a Non Resident Indian as my nominee?', 'Yes. A non-resident Indian can be a nominee subject to the exchange controls in force, from time to time.\r\n', 1, '2', 68, 0, '2015-10-10'),
(209, 'Can I nominate a minor as my nominee?', 'Yes. You are permitted to nominate a minor. However, if you nominate a minor, you must provide the name and address of the minor\'s guardian in the nomination request.\r\n', 2, '2', 69, 0, '2015-10-10'),
(210, 'Can I nominate more than one person in my Mutual Fund Folios ?', 'Yes, an investor has an option to register up to three nominee in a folio and specify the percentage of the amounts that will go to each nominee. However, If the percentage is not specified, equal shares will go to each of the nominee . \r\n', 1, '2', 70, 0, '2015-10-10'),
(211, 'Will my existing mutual fund nomination automatically get updated for all future Mutual Fund purchases also?', 'No. Nomination made in your existing mutual fund folios will not be automatically updated for new folios created for fresh mutual fund purchases made by you. For all new folios, you will be required to make a separate nomination request.\r\n', 1, '2', 71, 0, '2015-10-10'),
(212, 'If an investor has different schemes in a folio, will all units of all schemes be transferred to the nominee?', 'A nomination is at folio level and all units in the folio will be transferred to the nominee(s). If an investor makes a further investment in the same folio, the nomination is applicable to the\r\nnew units also. \r\n', 3, '2', 72, 0, '2015-10-10'),
(213, 'Can accounts be maintained by NRIs with any bank in India?', 'Banks holding authorised dealers\' licences (i.e. banks authorised to deal in foreign exchange) or banks specifically authorised in this behalf by Reserve Bank of India can only maintain accounts in the names of NRIs. Certain co-operative/commercial banks (referred to as authorised banks) have been specifically permitted to maintain accounts of NRIs expressed in rupees even though they are not authorised dealers.\r\n', 0, '9', 1, 0, '2015-10-11') ;
INSERT INTO `wp_ncl_nri_ques` ( `nri_ques_id`, `ques_name`, `ques_ans`, `ques_views`, `nri_fqsubcat_id`, `ques_position`, `home_ques_position`, `nri_faq_date`) VALUES
(214, 'Are NRIs permitted to maintain accounts in rupees and in foreign currency?', 'Yes. Accounts can be maintained by NRIs in rupees as well as in foreign currency. Accounts in foreign currencies can, however, be maintained with authorised dealers only.\r\n', 0, '9', 2, 0, '2015-10-11'),
(215, 'What are the different types of rupee accounts permitted to be maintained?', 'Two types of rupee accounts viz. Non-resident (External) Rupee Accounts (NRE) and Ordinary Non-resident Rupee Accounts (NRO) are permitted to be maintained by NRIs.\r\n', 0, '9', 3, 0, '2015-10-11'),
(216, 'Can NRIs maintain current/savings/fixed deposit rupee accounts with authorised dealers/authorised banks in India?', 'NRO and NRE accounts can be maintained in current/savings/fixed deposits form.\r\n', 0, '9', 4, 0, '2015-10-11'),
(217, 'During their visit to India, can the Non-Resident Indian use Travellers Cheques or Currency notes to open or credit the existing NRE account?', 'Non-Resident Indians are permitted to use Travellers Cheques or Currency Notes to open an account or credit the existing NRE account, subject to certain conditions and limits as stated below: <br>\r\nIn the case of those foreign currency notes brought by the Non-Resident Indians exceeds USD 5,000 or Travellers Cheques and notes exceeding USD 10,000, the NRI is required to submit the Currency Declaration Form (CDF) to the customs authorities in India. The CDF has to be submitted for endorsement by the bank for opening or credit to an account.\r\n', 0, '9', 5, 0, '2015-10-11'),
(218, 'Are Power of Attorney Holders allowed to credit proceeds of foreign currency notes, bank notes and travellers cheques to the NRE accounts?', 'Power of Attorney Holders are not allowed to credit proceeds of foreign currency notes, bank notes and travellers cheques to the NRE accounts.\r\n', 0, '9', 6, 0, '2015-10-11'),
(219, 'Can NRE accounts be opened by the power of attorney holder in India on behalf of a non-resident?', 'No.', 0, '9', 7, 0, '2015-10-11'),
(220, 'Can resident Power of Attorney holder operate on the NRE accounts?', 'Yes, but only for local payments to be made on behalf of the account holder. In cases where the account holder or a bank designated by him has been granted permission by Reserve Bank to make investments in India, the Power of Attorney holder (POA) is permitted to operate the account to facilitate such investments. In no circumstance is the Power of Attorney holder allowed to repatriate the funds abroad or make payments of gifts on behalf of the account holder.\r\n', 0, '9', 8, 0, '2015-10-11'),
(221, 'What is the difference between NRE account and NRO account?', 'Balances held in NRE accounts can be repatriated abroad freely, whereas funds in NRO account cannot be remitted abroad but have to be used only for local payments in rupees. Consequently, funds remitted from abroad or local funds which can otherwise be remitted abroad to the account holder can only be credited to NRE accounts. Funds due to the non-resident accountholder which do not qualify, under the Exchange Control regulations, for remittance outside India are required to be credited to NRO accounts. \r\n', 0, '9', 9, 0, '2015-10-11'),
(222, 'Can NRO/NRE accounts be maintained by NRIs jointly with residents?', ' NRO account can be held jointly with residents. However, NRE account cannot be held jointly with residents.\r\n ', 0, '9', 10, 0, '2015-10-11'),
(223, 'What is the rate of interest payable on such accounts?', 'Banks in India have been given freedom to decide interest rates on all non-resident rupee accounts. However, the rates of interest on deposits are subject to change as per the directives issued by Reserve Bank (Department of Banking Operations and Development) from time to time.\r\n', 0, '9', 11, 0, '2015-10-11'),
(224, 'Are debits and credits to NRO accounts allowed freely by banks maintaining the accounts?', 'Yes. Debits for local payments are allowed freely. Funds representing legitimate dues of the account holder or proceeds of remittances received from abroad through banking channels are permitted to be credited freely. Debits to the accounts for the purpose of investment in India and credits representing sale proceeds of investments are allowed subject to the accountholder giving an undertaking at the time of opening the account to the effect that such investments/disinvestments would be covered either by the general or special permission of Reserve Bank.\r\n', 0, '9', 12, 0, '2015-10-11'),
(225, 'What are the admissible debits and credits to NRE accounts?', 'Debits for local payments/investments are allowed freely. Credits to an account, of funds emanating from a local source would be permissible only if the funds are of a repatriable nature i.e. funds which are eligible to be remitted abroad.\r\n', 0, '9', 13, 0, '2015-10-11'),
(226, 'Can funds in NRE/NRO accounts be repatriated outside India?', 'Funds held in NRE accounts can be repatriated abroad freely. Funds held in NRO accounts which would generally be from local source cannot be repatriated outside India. \r\n', 0, '9', 14, 0, '2015-10-11'),
(227, 'Can the account holder or the dependents of the NRI utilize the funds in the NRE/NRO accounts for payment towards their airfare expenses to or from India?', ' Yes. The account holder or the dependents of the NRI can utilize the funds in the NRO or NRE accounts for payments towards their airfare expenses to or from India.\r\n ', 0, '9', 15, 0, '2015-10-11'),
(228, 'Are temporary overdrawings permitted in NRO Savings Bank accounts?', 'Yes. Authorised dealers, at their discretion, may allow such overdrawings up to Rs.50,000/- subject to the condition that the overdrawings together with the interest payable thereon are cleared within a period of two weeks.\r\n', 0, '9', 16, 0, '2015-10-11'),
(229, 'Are NRO/NRE account holders eligible for loans/overdrafts against their fixed deposits?', 'Yes, except for the purpose of relending, carrying on agricultural/plantation activities or for investment in real estate business. Loans against NRE fixed deposits can, however, be utilised for investments in India on non-repatriation basis, in certain specified areas and for acquisition of flats/houses subject to prescribed conditions.\r\n', 0, '9', 17, 0, '2015-10-11'),
(230, 'What are the rates of interest charged on such loans?', 'The rate of interest on such loans will be as per the directive issued by Reserve Bank (Department Banking Operations and Development) from time to time.\r\n', 0, '9', 18, 0, '2015-10-11'),
(231, 'Can loans raised against NRE fixed deposits be repaid out of funds in NRO account?', 'Yes. The loans raised against NRE deposits can be repaid out of funds held in NRO accounts. \r\n', 0, '9', 19, 0, '2015-10-11'),
(232, 'Can a third party in India take loans against the NRO fixed deposit accounts of NRI?', 'Yes, but subject to certain conditions.\r\n', 0, '9', 20, 0, '2015-10-12'),
(233, 'Is nomination allowed in NRO/NRE accounts?', 'Yes.', 0, '9', 21, 0, '2015-10-12'),
(234, 'Is repatriation of funds belonging to non-resident nominees permitted?', 'Funds held in NRO account will be allowed to be credited to the non-resident nominee\'s NRO account only and no repatriation is permitted. Remittance of funds to the non-resident nominee from the deceased person\'s NRE account will be permitted by authorised dealers.\r\n', 0, '9', 22, 0, '2015-10-12'),
(235, 'At what rates are remittances to India by NRIs for credit to NRE/NRO accounts converted into rupees?', 'Remittances for credit to rupee accounts (i.e. NRE/NRO account) maintained by NRIs are converted at the market rate.\r\n', 0, '9', 23, 0, '2015-10-12'),
(236, 'What is the status of NRO/NRE accounts on the return of the account holder to India?', 'Banks have been advised to redesignate such accounts as resident accounts on return of the account holder to India.\r\n', 0, '9', 24, 0, '2015-10-12'),
(237, 'Does the account holder suffer any loss of interest on such redesignation of accounts?', 'No Banks have been advised to continue to pay interest at the contracted rate till the maturity of the deposit if the deposit is held for the full term even after conversion into resident rupee account.\r\n', 0, '9', 25, 0, '2015-10-12'),
(238, 'Can accounts be maintained by NRIs in foreign currencies?', ' Yes. Accounts in foreign currencies can be maintained by NRIs with authorised dealers in India. This account is called Foreign Currency Non-Resident (FCNR) Account. FCNR Accounts are only in the form of term deposits of 1 to 5 years.\r\n ', 0, '9', 26, 0, '2015-10-12'),
(239, 'What are the foreign currencies in which such accounts can be maintained?', 'FCNR Account can be held in any freely convertible currency.\r\n', 0, '9', 27, 0, '2015-10-12'),
(240, 'Are FCNR accounts permitted to be maintained in the form of current/savings accounts?', 'No. FCNR accounts can be maintained only in the form of \'term deposits\', i.e. a deposit kept for fixed periods ranging from 1-5 years.\r\n', 0, '9', 28, 0, '2015-10-12'),
(241, 'Is premature withdrawal of the FCNR term deposit allowed?', 'Yes. However, this is subject to the levy of a penalty.\r\n', 0, '9', 29, 0, '2015-10-12'),
(242, 'What is the penalty for premature withdrawal of a FCNR deposit?', 'Interest in such cases is paid at one per cent below the interest rate payable for the period for which the deposit has actually run. Interest on deposits is, however, payable only if they are kept for a minimum period of one year. These matters are governed by the instructions/directives issued by Reserve Bank of India from time to time.\r\n', 0, '9', 30, 0, '2015-10-12'),
(243, 'If a FCNR deposit of one year maturity is withdrawn prematurely, would any interest be payable?', 'No. While the premature withdrawal would be allowed, no interest would be payable. For such premature withdrawals the bank may levy penalty as per their discretion.\r\n', 0, '9', 31, 0, '2015-10-12'),
(244, 'What is the rate of interest paid on FCNR deposits?', 'The interest rates on FCNR deposits are stipulated by the Department of Banking Operations and Development, Reserve Bank of India. With effect from March 1, 2014, in respect of FCNR deposits of maturities, 1-3 years, interest shall be paid within the ceiling rate of LIBOR/ SWAP rates plus 200 basis points for the respective currency/ corresponding maturity. For FCNR deposits with maturity of 3-5 years, interest shall be paid within the ceiling rate of LIBOR/ SWAP rates plus 300 basis points. On floating rate deposits, interest shall be paid within the ceiling of SWAP rates for the respective currency/ maturity plus 200 bps/ 300 bps, as the case may be. For floating rate deposits, the interest reset period shall be six months.\r\n', 0, '9', 32, 0, '2015-10-12'),
(245, 'What about debits to FCNR accounts for local payments?', 'Debits for local payments in rupees are allowed freely.\r\n', 0, '9', 33, 0, '2015-10-12'),
(246, 'Are funds in FCNR accounts freely repatriable abroad?', 'Yes. Authorised dealers maintaining these accounts would allow repatriation abroad of these funds.\r\n', 0, '9', 34, 0, '2015-10-12'),
(247, 'Can FCNR deposits be held jointly with residents?', 'No.', 0, '9', 35, 0, '2015-10-12'),
(248, 'Is nomination allowed in FCNR accounts?', 'Yes.', 0, '9', 36, 0, '2015-10-12'),
(249, 'Can an NRI transfer funds between NRE/FCNR accounts?', 'Yes. The funds can be transferred between NRE or FCNR accounts of an account holder and also between NRE or FCNR accounts of two different NRIs, ie, the funds lying in NRE or FCNR accounts of an NRI can be freely transferred to NRE or FCNR account of any other NRI.\r\n', 0, '9', 37, 0, '2015-10-12'),
(250, 'Is repatriation of FCNR funds to non-resident nominees permitted?', 'Yes.', 0, '9', 38, 0, '2015-10-12'),
(251, 'What is the status of FCNR accounts on the return of the account holder to India?', 'Banks would treat the deposits held in FCNR accounts as resident deposits but would continue to pay interest at the contracted rate till maturity of the deposit.\r\n', 0, '9', 39, 0, '2015-10-12'),
(252, 'In order to facilitate the opening of an NRE or FCNR account, are NRIs permitted to utilize the funds of NRO account?', 'Interest on NRO account (subject to payment of tax) is fully repatriable. However, the funds can be utilised to open NRE or FCNR account after the procedural aspects are complied with ,i.e., tax is deducted at source in case of NRO account and procedure for NRE or FCNR account is complied with.\r\n', 0, '9', 40, 0, '2015-10-12'),
(253, 'What are the tax concessions available to NRIs on balances or deposits held in NRE or FCNR accounts?', 'The income from interest on moneys standing to the credit of NRE or FCNR accounts is exempt from Income Tax. Gifts from such accounts are not liable to Gift Tax as the Gift Tax is abolished w.e.f. 30/9/1998. Similar tax concessions however are not available for NRO accounts.\r\n', 0, '9', 41, 0, '2015-10-12'),
(254, 'What is a Resident Foreign Currency (RFC) Account Scheme?', 'The Resident Foreign Currency (RFC) Account facilitates investment of funds for those individuals of Indian nationality or origin who have returned to India for permanent settlement (Returning Indians) after a stay outside India for a continuous period of not less than one year.\r\n', 0, '9', 42, 0, '2015-10-12'),
(255, 'Are the balances in NRE or FCNR account permitted to be credited to RFC account?', 'The balances in NRE or FCNR account can be credited to RFC Account on the change of the status of the NRE or FCNR Account holder from a Non-Resident to a Resident. \r\n', 0, '9', 43, 0, '2015-10-12'),
(256, 'How long is the NRI permitted to maintain RFC account once he becomes a resident?', 'A person can maintain an RFC Account, once he becomes a resident for any length of time as long as he remains to be a resident. If his status changes from once again from Resident to Non-Resident, the funds held in RFC account are allowed to be freely remitted abroad or credited to fresh NRE or FCNR account.\r\n', 0, '9', 44, 0, '2015-10-12'),
(257, 'Is the interest earned on RFC account liable to tax?', 'Yes. Interest earned on RFC account is liable to tax in the hands of the account holder provided he is a \'Non Resident\' or \'Resident but not ordinarily Resident\' as defined under the Income Tax act. There is an obligation on part of the Bank to deduct TDS on interest on such deposits.\r\n', 0, '9', 45, 0, '2015-10-12') ;

#
# End of data contents of table `wp_ncl_nri_ques`
# --------------------------------------------------------

