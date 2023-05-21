<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Личный кабинет продавца");
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

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>