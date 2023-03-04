$(".btn-info-laporan").click(function(){
    let modal = $($(this).attr('data-target'));
    $.ajax({
        headers: {
        "X-CSRF-TOKEN" : $("meta[name=csrf-token]").attr('content')
        },
        url: $(this).attr("uri"),
        dataType: "json",
        data: {
            id_pengaduan: $(this).attr("value")
        },
        type: "get",
        success: function(data){
            
            $(".status-drop").text(data["status"]);
            $(".status-drop").attr("class","btn  dropdown-toggle status-drop "+renderSpan(data["status"]));
            console.log(data);
            //rendertab
            if(data["penugasan"]==null){
                    //alert("tes");
                    $("#respon-petugas").children(".card").hide();

                    
             }else{
                $("input[name=param]").val(data["penugasan"]["id_penugasan"]);
                    $("#respon-petugas").children(".card").show();

                    $(".keterangan-admin-text").text(data["penugasan"]["keterangan_admin"]);
                    
                    //isi tanggapan
                    if(data["penugasan"]["tanggapan"].length > 0){
                        var message = data["penugasan"]["tanggapan"].map(function(e){
                            return ` <div class="direct-chat-msg ${e['id_sender'] == "{{auth()->user()->id}}" ? 'left' : 'right'}" >
                                <div class="direct-chat-infos clearfix">
                                <span class="direct-chat-name ${e['id_sender'] == "{{auth()->user()->id}}" ? 'float-left' : 'float-right'}">${e["sender"]["name"]+" "} </span>
                                <span class="direct-chat-timestamp ${e["id_sender"] == "{{auth()->user()->id}}" ? 'float-left' : 'float-right'}">${e["tanggal"]}</span>
                                </div>
                                <!-- /.direct-chat-infos -->
                                <img class="direct-chat-img" src="https://www.cobdoglaps.sa.edu.au/wp-content/uploads/2017/11/placeholder-profile-sq.jpg" alt="message user image">
                                <!-- /.direct-chat-img -->
                                <div class="direct-chat-text">
                                ${e["tanggapan"]} 
                                </div>
                                <!-- /.direct-chat-text -->
                            </div>`
                        });
                     
                        $(".direct-chat-messages").html(message);


                    }else{
    
                        $(".card-tanggapan").html("<h4 class='m-auto p-4'>Belum ada tanggapan</h4>");
                    }

             }
             $(".modal-jenis-laporan").text(data["jenis_pengaduan"]["jenis"]);
             $(".modal-judul-laporan").text(data["judul_pengaduan"]);
             $(".modal-tanggal-laporan").text(data["tanggal"]);
            $(".keterangan-field").text(data["keterangan"]);


            let images = data["lampiran"].map(function(e,i){
                return ` <div class="carousel-item ${i==0 ? "active" : ""}">
                <img class="d-block " style="height: 400px; width:300px" src="${e["isi_lampiran"]}" alt="First slide">
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
            if(data["penugasan"] != null){
                listpetugas = data["penugasan"]["petugas_lapangan"].map(function(e){
                    return `<li class='list-group-item'>${e['petugas']['name']}</li>`
                });
            }
           // console.log(data);
            var log = data["log"].map(function(e){
                return `<li class='list-group-item'>${e["tanggal"]} <b>${e['user']['name']} ${e['keterangan_log']}</b></li>`
            });

            $(".list-petugas").html(listpetugas);
            $(".list-log").html(log);


            $(".dropdown-status").children(".item-status").each(function(){
                $(this).attr("value", $(this).html()+":"+data['id_pengaduan']); 
            });

            


            $(".id-pengaduan-field").val(data['id_pengaduan']);

            if(data["penugasan"] == undefined){
                
                $("#keterangan-akhir").html(`<h3>Belum ada keterangan</h3>`);
            }else{
                if(data['penugasan']['keterangan_petugas'] != null){
                    $("#keterangan-akhir").html(data["penugasan"]['keterangan_petugas']);
                }
                
            }


            modal.modal("show");

            
        },
        error: function(err){
            alert(err.responseText);
        }
    });



    $(".close").click(function(){
        $(this).closest(".modal").modal('hide');
    });


});

function changeStatus(val, url){
    var toastMixin = Swal.mixin({
        toast: true,
        icon: 'success',
        title: 'General Title',
        animation: false,
        position: 'top-right',
        showConfirmButton: false,
        timer: 300,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer)
          toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
      });




    let arr = val.split(":");
    let status = arr[0];
    let id_pengaduan = arr[1];
    if(status != 'Selesai'){
        $.ajax({
            headers: {
                "X-CSRF-TOKEN": $("meta[name=csrf-token]").attr("content")
            },
            url: url ,
            dataType: "json",
            data: {
                val: val,
            },
            type: "post",
            success: function(){
                toastMixin.fire({
                    animation: true,
                    title: 'Status Berhasil diubah'
                  }).then(function(){
                    window.location = '';
                  });
            },error: function(err){
                alert(err.responseText);
             } 
        });
    }else{
       $("#modal-selesai").modal("show");
    }
   
}


 function sendMessage(url){
    if($("#isi-pesan").val().length != ""){
        $.ajax({
            headers: {
                "X-CSRF-TOKEN": $("meta[name=csrf-token]").attr("content")
            },
            url: url,
            dataType: "json",
            data: {
                "id_penugasan": $("input[name=param]").val(),
                "pesan": $("#isi-pesan").val()
            },
            type: "post",
            success: function(data){
                window.location = "";
            },error: function(err){
                alert(err.responseText);
            }
        })
    }
}

function readImage(input,output) {
    output.html("");
    
    if (input.files) {
      for(let i = 0; i < input.files.length;i++){
        var reader = new FileReader();
  
        reader.onload = function(e) {
            output.append(`<div class="carousel-item ${(i == 0 ? "active" : "")}"><img class="d-block w-100" src="${e.target.result}" alt="${(i+1)}" slide"></div>`);
        }
        
        reader.readAsDataURL(input.files[i]);
        }
    }
    
    

  }
  


  function tampilkanpetugas(data){
    let judul = "Informasi Penugasan";
    let listpetugas = data["petugas_lapangan"].map(function(e){
        return `
            <tr>
                <td>${e["petugas"]['name']}</td>
                <td>${e["jabatan"]}</td>
                <td><button class="fa fa-danger><i class="fa fa-trash"></i></button></td>
            </tr>
        `;
    });
    let keterangan_admin = data["keterangan_admin"];

    //Isi modal
    $("#modal-petugas-keteranganadmin").text(judul);
    $(".petugas-list").html(listpetugas);
    $("#id_pengaduan").html(data["id_pengaduan"])
  }
  
  
  
  
  

