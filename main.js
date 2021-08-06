$countryInput = $("#country");
$resultSection = $("#result-section");

$('#check-button').on('click', () => {
        const countryName = $countryInput.val();

        $.ajax({
                url: "scrap-data.php",
                type: "get",
                data: {
                        country: countryName,
                },
                success: function (result) {
                        $resultSection.html(result);
                }
        });
})