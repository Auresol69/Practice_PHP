var currentPage = 1;

function Tien() {
    if (currentPage < sumPage)
        LoadPage(currentPage + 1);
}

function Lui() {
    if (currentPage > 1)
        LoadPage(currentPage - 1);
}

function LoadPage(page) {
    $.ajax({
        dataType: "json",
        type: "GET",
        url: "handle.php",
        data: { page: page },
        success: function (response) {
            $('#page').html(response.html);
            currentPage = response.currentPage;
            sumPage = response.sumPage;
            console.log("Trang hiện tại:", currentPage);
        }
    });
}

$(document).ready(function () {
    LoadPage(currentPage);
});