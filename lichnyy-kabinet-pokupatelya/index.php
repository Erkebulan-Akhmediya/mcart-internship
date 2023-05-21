<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Личный кабинет покупателя");
?>

<?
$APPLICATION->IncludeComponent(
	"bitrix:main.profile", 
	".default", 
	array(
		"NAME" => GetMessage("COMP_MAIN_PROFILE_TITLE"),
		"DESCRIPTION" => GetMessage("COMP_MAIN_PROFILE_DESCR"),
		"ICON" => "/images/user_profile.gif",
		"PATH" => array(
			"ID" => "utility",
			"CHILD" => array(
				"ID" => "user",
				"NAME" => GetMessage("MAIN_USER_GROUP_NAME"),
			),
		),
		"COMPONENT_TEMPLATE" => ".default",
		"SET_TITLE" => "Y",
		"USER_PROPERTY" => array(
		),
		"SEND_INFO" => "N",
		"CHECK_RIGHTS" => "N",
		"USER_PROPERTY_NAME" => ""
	),
	false
);
?>

<?
$APPLICATION->IncludeComponent(
	"bitrix:subscribe.form", 
	".default", 
	array(
		"NAME" => GetMessage("CD_BSF_NAME"),
		"DESCRIPTION" => GetMessage("CD_BSF_DESCRIPTION"),
		"ICON" => "/images/subscr_form.gif",
		"CACHE_PATH" => "Y",
		"PATH" => array(
			"ID" => "service",
			"CHILD" => array(
				"ID" => "subscribe",
				"NAME" => GetMessage("CD_BSF_SERVICE"),
			),
		),
		"COMPONENT_TEMPLATE" => ".default",
		"USE_PERSONALIZATION" => "Y",
		"SHOW_HIDDEN" => "N",
		"PAGE" => "#SITE_DIR#about/subscr_edit.php",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600"
	),
	false
);
?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>