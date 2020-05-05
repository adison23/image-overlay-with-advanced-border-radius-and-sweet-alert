<!DOCTYPE html>
<html>

<head>
    <style>
    	*{
    		font-family: poppins medium;
    	}
    main {
        width: 100%;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        
    }
    .swal-button{
    	background: #4ecd77;
    }
    .swal-button:hover{
    	background: #28cb76 !important;
    }
	.swal-icon--success__ring {   
    border: 5px solid #4dcd65;
}
.swal-icon--success__line {   
    background:  #4dcd65;
}

    .img {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        border: none;
        border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
        background: #bcdbf9;
        height: 380px;
        width: 420px;
        /*padding: 70px  90px 50px;*/
        display: flex;
        justify-content: center;
        align-items: center;
        transition: 0.5s all linear;
    }

    .img img {
        margin-top: -40px;
        margin-left: -30px;
    }

    .text2 {
        position: absolute;
        bottom: 100%;
        left: 0;
        right: 0;
        background-color: #ff4757;
        overflow: hidden;
        width: 500px;
        height: 0;
        transition: .5s ease;
    }

    .container {
        position: relative;
        margin-top: 18%;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
    }

    .image img {
        margin-top: -40px;
        margin-left: -30px;
        cursor: pointer;
    }

    .image {
        display: block;
        width: 500px;
        height: 500px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        border: none;
        border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
        background: #bcdbf9;
        height: 380px;
        width: 420px;
        /*padding: 70px  90px 50px;*/
        display: flex;
        justify-content: center;
        align-items: center;
        transition: 0.5s all linear;
        cursor: pointer;
    }

    .overlay {
        position: absolute;
        bottom: 100%;
        left: 0;
        right: 0;
        background-color: #ff4757;
        overflow: hidden;
        /*width: 500px;*/
        height: 0;
        border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
        background: #1e90ff;
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: poppins medium;
        color: white;
        transition: .5s ease;
        cursor: pointer;
    }

    .container:hover .overlay {
        bottom: 0;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: poppins medium;
        color: white;
        cursor: pointer;
    }

    .text {
        color: white;
        font-size: 20px;
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        text-align: center;
    }
    </style>
    <title>Image Hover Text</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.css" integrity="sha256-2bAj1LMT7CXUYUwuEnqqooPb1W0Sw0uKMsqNH0HwMa4=" crossorigin="anonymous" />
</head>

<body>
	<h1 align="center">CSS3 Image Overlay WITH Advanced Border Radius, SVG And SWEET ALERT</h1>
    <div class="main">
        <div class="container">
            <div class="image">
                <img src="../man.png" height="250px">
                <div class="overlay">

                	<img src="">
                    <h1>CLICK ME</h1>
                </div>
            </div>
        </div>
    </div>
    <script src="http://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha256-KsRuvuRtUVvobe66OFtOQfjP8WA2SzYsmm4VPfMnxms=" crossorigin="anonymous"></script>
    <script>
		$(".image").on("click",function(){
			swal({ 
			    title: "Hover Effect In CSS3", 
			    text: "This Is Coded By Mr Adison Masih", 
			    icon: "success",
			    showCancelButton: true,

			});
			var btn = $(".swal-button");
		});
    	
    </script>
</body>

</html>
<?php 



?>