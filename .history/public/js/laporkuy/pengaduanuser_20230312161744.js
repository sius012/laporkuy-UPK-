
function showLampiran(btn, url, jenis == null){
    $.ajax({
        headers: {
            "X-CSRF-TOKEN": $("meta[name=csrf-token]").attr("content")
        },
        data: {
            id_pengaduan: btn.val(),
            state: btn.attr('state')
        },
        url: url,
        type: "get",
        dataType: "json",
        success: function(data) {
            let corousel = data.map(function(e, i) {
                return `<div class="carousel-item ${i == 0 ? "active" : ""} ">
                    <img class="d-block w-100" src="${e['isi_lampiran']}" alt="First slide">
                  </div>`;
            });
            console.log(corousel);
            $("#img-prev").html(corousel);
        },
        error: function(err) {
            alert(err.responseText);
        }
    });
}

       
   