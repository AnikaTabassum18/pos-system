<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <style>
      body {
          font-family: "Lato", sans-serif;
      }
      .sidebar {
          height: 100%;
          width: 0;
          position: fixed;
          z-index: 1;
          top: 0;
          left: 0;
          background-color: #111;
          overflow-x: hidden;
          transition: 0.5s;
          padding-top: 60px;
      }

      .sidebar a {
          padding: 8px 8px 8px 32px;
          text-decoration: none;
          font-size: 25px;
          color: #818181;
          display: block;
          transition: 0.3s;
      }

      .sidebar a:hover {
          color: #f1f1f1;
      }

      .sidebar .closebtn {
          position: absolute;
          top: 0;
          right: 25px;
          font-size: 36px;
          margin-left: 50px;
      }

      .openbtn {
          font-size: 20px;
          cursor: pointer;
          background-color: rgb(4, 12, 91);
          color: white;
          padding: 10px 15px;
          border: none;
      }

      .openbtn:hover {
          background-color: rgb(66, 102, 243);
      }

      #main {
          transition: margin-left .5s;
          padding: 16px;
      }
      #Sidebar {
        /* width:250px; */
      }
      /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
      @media screen and (max-height: 450px) {
          .sidebar {
              padding-top: 15px;
          }

          .sidebar a {
              font-size: 18px;
          }
      }

  </style>
</head>

<body>

  <div id="Sidebar" class="sidebar">
      <a href="" class="closebtn">×</a>
      <a href="#">About</a>
      <a href="#">Services</a>
      <a href="#">Clients</a>
      <a href="#">Contact</a>
  </div>

  <div id="main">
      <button class="openbtn">☰ Open Sidebar</button>
  </div>

  <script>
    $(document).ready(function() {
      $("#main").click(function() {
        $("#Sidebar").css("width","250px");
        $("#main").css("marginLeft","250px");
      });
      $(".closebtn").click(function() {
        $("#Sidebar").css("width","0px");
        $("#main").css("marginLeft","0px");
      });
    });
  </script>

</body>
