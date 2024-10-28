<!DOCTYPE html>
<html>

<head>
    <title>Teacher Portal</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

    <script src="script.js" async></script>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

</head>

<body class= "h-screen bg-gradient-to-b from-gray-100 to-gray-300">


    <header>

        <nav class="navbar navbar-expand-lg bg-body-tertiary bg-white">
            <div class="container-fluid headerDiv">
                <a class="navbar-brand fw-bold fs-1 pointer-events-none text-red-500" href="#">Teacher's
                    Portal.</a>
            </div>
            <div id="navbarNav navStudents">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item hover:text-blue-700">
                        <a class="nav-link active hover:text-blue-700" aria-current="page" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>


        <div class="flex flex-col tableDiv">
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <div class="border rounded-lg divide-y divide-gray-200">
                        <div class="overflow-hidden">


                            <table id="studentTable" class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-slate-200">
                                    <tr>

                                        <th scope="col"
                                            class="px-6 py-3 text-start text-base font-bold text-gray-500 uppercase ">
                                            Name
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-base font-bold text-gray-500 uppercase">Age
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-base font-bold text-gray-500 uppercase">
                                            Marks
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-end text-base font-bold text-gray-500 uppercase">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class = "addStudent">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary bg-slate-700" data-bs-toggle="modal"
                data-bs-target="#exampleModalCenter">
                Add Student
            </button>
        </div>




        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-slate-200">
                        <h5 class="modal-title fw-bold fs-6" id="exampleModalLongTitle">Student Details</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm">
                                    <div class="login-form">
                                        <!-- <h2>Students Details</h2> -->
                                        <br>
                                        <form action="saveStudent.php" method="post">
                                            <!-- Student Name input -->
                                            <div data-mdb-input-init class="form-outline mb-4 ">
                                                <label class="form-label" for="stdName">Student Name</label>
                                                <input type="text" id="stdName" class="form-control" name="stdName"
                                                    required />
                                            </div>

                                    </div>

                                    <!-- Subject input -->
                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <label class="form-label" for="subject">Subject</label>
                                        <input type="text" id="subject" class="form-control" name="subject"
                                            required />
                                    </div>

                                    <!-- Marks input -->
                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <label class="form-label" for="marks">Marks</label>
                                        <input type="text" id="marks" class="form-control" name="marks"
                                            required />

                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <!-- Update Student Details -->
        <div class="modal fade" id="updateStudentDetails" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title  fw-bold fs-6" id="exampleModalLongTitle">Student Details</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm">
                                    <div class="login-form">
                                        <br>
                                        <form action="updateStudent.php" method="post">


                                            <!-- Student Name input -->
                                            <div data-mdb-input-init class="form-outline mb-4">
                                                <label class="form-label" for="stdName">Student Name</label>
                                                <input type="text" id="stdName" class="form-control"
                                                    name="stdName" required />
                                                <div
                                                    class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                                    <i class="fas fa-envelope text-gray-400"></i>
                                                </div>
                                            </div>

                                            <!-- Subject input -->
                                            <div data-mdb-input-init class="form-outline mb-4">
                                                <label class="form-label" for="subject">Subject</label>
                                                <input type="text" id="subject" class="form-control"
                                                    name="subject" required />
                                            </div>

                                            <!-- Marks input -->
                                            <div data-mdb-input-init class="form-outline mb-4">
                                                <label class="form-label" for="marks">Marks</label>
                                                <input type="text" id="marks" class="form-control"
                                                    name="marks" required />
                                            </div>

                                            <div class="modal-footer">
                                                <input type="hidden" id="recordId" name="recordId">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                                <button type="submit"
                                                    class="btn btn-primary bg-green-700">Update</button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Delete Confirmation -->
        <div class="modal fade" id="deleteConfirmation" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Student Details</h5>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm">
                                    <div class="login-form">
                                        <h2>Are you sure you want to delete the student:</h2>
                                        <br>
                                        <form action="deleteStudent.php" method="post">
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">No</button>
                                                <input type="hidden" id="recordId" name="recordId">
                                                <button type="submit" class="btn btn-primary bg-red-800">Yes</button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="addStudentModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <h2>Add Student</h2>
            </div>
        </div>
        </main>


</body>

</html>
