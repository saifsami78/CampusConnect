<body>
        <style>
            h3{
                color: mediumseagreen;
            }
        </style>

        <br>

        <div class="container">

            <h3><center>This page is only for faculty members.If you are not a faculty member, please ignore it.All your infomation will be publicly available in this website and everyone will be able to see it </center></h3>
            <br>
            <br>
            <form action=Afacultyinfo.php" method="post">


                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Upload your Photo </label>
                        <br>
                        <input type="file" class="form-control-file" id="photo" name="photo">
                    </div>

                    <div class="input-group">
                        <span class="input-group-text">Describe about yourself in few words :   </span>
                        <textarea class="form-control" aria-label="With textarea" name="tellyourself"></textarea>
                    </div>

                    <br>
                    <p> Research Interest : </p>
                    <div class="input-group">
                        <textarea class="form-control" aria-label="With textarea" name="rsinterest"></textarea>
                    </div>

                <br>

                <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label"> Office Hour   </label>
                        <textarea class="form-control" id="exampleTextarea" rows="3" name="officehour"></textarea>
                </div>


                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Full Name </label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="fullname">
                    </div>
                    
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Department Name </label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="Departmentname">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Faculty ID </label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="facultyID">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label"> Email  </label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@northsouth.edu" name="email">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label"> Contact Number  </label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="phone">
                    </div>
                    <button type="submit" class="btn btn-success"> Submit </button>


            </form>

        </div>
</body>