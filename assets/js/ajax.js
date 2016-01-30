function changetype(id)
{
	if (id=="1") {
		$("#a_days_t").html("Кол-во дней");
		$("#a_days").attr("placeholder", "30");
	} else if (id=="2") {
		$("#a_days_t").html("Кол-во дней");
		$("#a_days").attr("placeholder", "30");
	} else if (id=="3") {
		$("#a_days_t").html("Кол-во кругов");
		$("#a_days").attr("placeholder", "5");
	}
}