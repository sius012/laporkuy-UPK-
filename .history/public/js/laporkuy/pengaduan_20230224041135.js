$(".btn-info-laporan").click(function(){
    alert($(this).attr("uri"));
    $.ajax({
        headers: {
        "X-CSRF-TOKEN" : $("meta[name=csrf-token]").attr('content')
        },
        url: $(this).attr("uri"),
        dataType: "json",
        data: {
            id_pengaduan: $(this).val()
        },
        type: "post",
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
            `)
        },
        error: function(err){
            alert(err.responseText);
        }
    })
})