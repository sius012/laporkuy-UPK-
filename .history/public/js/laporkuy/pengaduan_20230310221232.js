var toastMixin = Swal.mixin({
    toast: true,
    icon: "success",
    title: "General Title",
    animation: false,
    position: "top-right",
    showConfirmButton: false,
    timer: 300,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.addEventListener("mouseenter", Swal.stopTimer);
        toast.addEventListener("mouseleave", Swal.resumeTimer);
    },
});

$(".btn-info-laporan").click(function () {
    let modal = $($(this).attr("data-target"));
    $.ajax({
        headers: {
            "X-CSRF-TOKEN": $("meta[name=csrf-token]").attr("content"),
        },
        url: $(this).attr("uri"),
        dataType: "json",
        data: {
            id_pengaduan: $(this).attr("value"),
        },
        type: "get",
        success: function (data) {
            $(".status-drop").text(data["status"]);
            $(".status-drop").attr(
                "class",
                "btn  dropdown-toggle status-drop " + renderSpan(data["status"])
            );
            console.log(data);
            //rendertab
            if (data["penugasan"] == null) {
                //alert("tes");
                $("#respon-petugas").children(".card").hide();
            } else {
                $("input[name=param]").val(data["penugasan"]["id_penugasan"]);
                $("#respon-petugas").children(".card").show();

                $(".keterangan-admin-text").text(
                    data["penugasan"]["keterangan_admin"]
                );

                //isi tanggapan
                if (data["penugasan"]["tanggapan"].length > 0) {
                    var message = data["penugasan"]["tanggapan"].map(function (
                        e
                    ) {
                        return ` <div class="direct-chat-msg ${
                            e["id_sender"] == "{{auth()->user()->id}}"
                                ? "left"
                                : "right"
                        }" >
                                <div class="direct-chat-infos clearfix">
                                <span class="direct-chat-name ${
                                    e["id_sender"] == "{{auth()->user()->id}}"
                                        ? "float-left"
                                        : "float-right"
                                }">${e["sender"]["name"] + " "} </span>
                                <span class="direct-chat-timestamp ${
                                    e["id_sender"] == "{{auth()->user()->id}}"
                                        ? "float-left"
                                        : "float-right"
                                }">${e["tanggal"]}</span>
                                </div>
                                <!-- /.direct-chat-infos -->
                                <img class="direct-chat-img" src="https://www.cobdoglaps.sa.edu.au/wp-content/uploads/2017/11/placeholder-profile-sq.jpg" alt="message user image">
                                <!-- /.direct-chat-img -->
                                <div class="direct-chat-text">
                                ${e["tanggapan"]} 
                                </div>
                                <!-- /.direct-chat-text -->
                            </div>`;
                    });

                    $(".direct-chat-messages").html(message);
                } else {
                    $(".card-tanggapan").html(
                        "<h4 class='m-auto p-4'>Belum ada tanggapan</h4>"
                    );
                }
            }
            $(".modal-jenis-laporan").text(data["jenis_pengaduan"]["jenis"]);
            $(".modal-judul-laporan").text(data["judul_pengaduan"]);
            $(".modal-tanggal-laporan").text(data["tanggal"]);
            $(".modal-lokasi-laporan").text(data["lokasi"]);
            $(".keterangan-field").text(data["keterangan"]);

            let images = data["lampiran"].map(function (e, i) {
                return ` <div class="carousel-item ${i == 0 ? "active" : ""}">
                <img class="d-block " style="height: 400px; width:300px" src="${
                    e["isi_lampiran"]
                }" alt="First slide">
                </div>`;
            });
            // alert(images);

            //load image
            $(".img-prev-cont").html(`
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                ${images}
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            `);

            var listpetugas = "";
            if (data["penugasan"] != null) {
                listpetugas = data["penugasan"]["petugas_lapangan"].map(
                    function (e) {
                        return `<li class='list-group-item'>${e["petugas"]["name"]}</li>`;
                    }
                );
            }
            // console.log(data);
            var log = data["log"].map(function (e) {
                return `<li class='list-group-item'>${e["tanggal"]} <b>${e["user"]["name"]} ${e["keterangan_log"]}</b></li>`;
            });

            $(".list-petugas").html(listpetugas);
            $(".list-log").html(log);

            $(".container-maps").html(`
            <div class="mapouter"><div class="gmap_canvas"><iframe width="770" height="510" id="gmap_canvas" src="https://maps.google.com/maps?q=${data["lokasi"]}&t=&z=10&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://2yu.co">2yu</a><br><style>.mapouter{text-align:right;}</style><a href="https://embedgooglemap.2yu.co">html embed google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height;}</style></div></div>
            `);

            $(".dropdown-status")
                .children(".item-status")
                .each(function () {
                    $(this).attr(
                        "value",
                        $(this).html() + ":" + data["id_pengaduan"]
                    );
                });

            $(".id-pengaduan-field").val(data["id_pengaduan"]);

            if (data["penugasan"] == undefined) {
                $("#keterangan-akhir").html(`<h3>Belum ada keterangan</h3>`);
            } else {
                if (data["penugasan"]["keterangan_petugas"] != null) {
                    $("#keterangan-akhir").html(
                        data["penugasan"]["keterangan_petugas"]
                    );
                }
            }

            modal.modal("show");
        },
        error: function (err) {
            alert(err.responseText);
        },
    });

    $(".close").click(function () {
        $(this).closest(".modal").modal("hide");
    });
});

function changeStatus(val, url) {
    let arr = val.split(":");
    let status = arr[0];
    let id_pengaduan = arr[1];
    if (status != "Selesai" && status != "Dibatalkan") {
        AjaxStatus(val, url);
    } else if (status == "Dibatalkan") {
        Swal.fire({
            title: "Apakah ingin membatalkan aduan?",
            text: "tuliskan keterangan anda",
            input: "text",
            inputAttributes: {
                autocapitalize: "off",
                placeholder: "keterangan",
            },
            showCancelButton: true,
            confirmButtonText: "Hapus",
            showLoaderOnConfirm: true,
        }).then((result) => {
            if (result.isConfirmed) {
                AjaxStatus(val, url, result.value);
            }
        });
    } else {
        $("#modal-selesai").modal("show");
    }
}

function deletePengaduan(id, url){
    Swal.fire({
        title: 'Apakah ingin menghapus aduan?',
        text: "tuliskan keterangan anda",
        input: 'text',
        inputAttributes: {
          autocapitalize: 'off',
          placeholder: "keterangan"
        },
        showCancelButton: true,
        confirmButtonText: 'Hapus',
        showLoaderOnConfirm: true,
      }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                headers: {}
            })
        }
      })
}

function sendMessage(url) {
    if ($("#isi-pesan").val().length != "") {
        $.ajax({
            headers: {
                "X-CSRF-TOKEN": $("meta[name=csrf-token]").attr("content"),
            },
            url: url,
            dataType: "json",
            data: {
                id_penugasan: $("input[name=param]").val(),
                pesan: $("#isi-pesan").val(),
            },
            type: "post",
            success: function (data) {
                window.location = "";
            },
            error: function (err) {
                alert(err.responseText);
            },
        });
    }
}

function readImage(input, output) {
    output.html("");

    if (input.files) {
        for (let i = 0; i < input.files.length; i++) {
            var reader = new FileReader();

            reader.onload = function (e) {
                output.append(
                    `<div class="carousel-item ${
                        i == 0 ? "active" : ""
                    }"><img class="d-block w-100" src="${
                        e.target.result
                    }" alt="${i + 1}" slide"></div>`
                );
            };

            reader.readAsDataURL(input.files[i]);

            if (input.files.length > 0) {
                $(".col-carousel").show();
            } else {
                $(".col-carousel").hide();
            }
        }
    }
}

function tampilkanpetugas(data) {
    var form = $("#penugasan-form");
    let url = form.attr("url");
    if (data == null) {
        let judul = "Tambahkan Petugas";
        form.attr("action", url + "/assignpetugas");
    } else {
        form.attr("action", url + "/updatepetugas");
        let judul = "Informasi Penugasan";
        let listpetugas = data["petugas_lapangan"].map(function (e) {
            return `
            <tr>
                <td><input type='hidden' name="petugas[]" class="petugas-id-cont" value="${
                    e["petugas"]["id"]
                }">${e["petugas"]["name"]}</td>
                <td>
                    <select class="form-control" class="jabatan-select" name="jabatan[]">
                        <option value='Anggota' ${
                            e["jabatan"] == "Anggota" ? "selected" : ""
                        }>Anggota</option>
                        <option value='Ketua' ${
                            e["jabatan"] == "Ketua" ? "selected" : ""
                        }>Ketua</option>
                    </select>
                </td>
                <td><button class="btn btn-danger btn-hapus-petugas"><i class="fa fa-trash"></i></button></td>
            </tr>
        `;
        });
        let keterangan_admin = data["keterangan_admin"];

        //Isi modal
        $("#modal-petugas-keteranganadmin").text(keterangan_admin);
        $(".petugas-container").html(listpetugas);
        $("#id_pengaduan").html(data["id_pengaduan"]);
        $("#modal-petugas-judul").text(judul);
    }
}

function AjaxStatus(val, url, keterangan = null) {
    $.ajax({
        headers: {
            "X-CSRF-TOKEN": $("meta[name=csrf-token]").attr("content"),
        },
        url: url,
        dataType: "json",
        data: {
            val: val,
            keterangan: keterangan,
        },
        type: "post",
        success: function () {
            toastMixin
                .fire({
                    animation: true,
                    title: "Status Berhasil diubah",
                })
                .then(function () {
                    window.location = "";
                });
        },
        error: function (err) {
            alert(err.responseText);
        },
    });
}
