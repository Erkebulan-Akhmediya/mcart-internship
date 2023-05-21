<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Обратная свзяь");
?>

<?
$APPLICATION->IncludeComponent("bitrix:main.feedback", "", array(
    "NAME" => GetMessage("MAIN_FEEDBACK_COMPONENT_NAME"),
	"DESCRIPTION" => GetMessage("MAIN_FEEDBACK_COMPONENT_DESCR"),
	"ICON" => "/images/feedback.gif",
	"PATH" => array(
		"ID" => "utility",
	),
));
?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>