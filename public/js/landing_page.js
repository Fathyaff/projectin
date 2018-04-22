$(document).ready(function () {
    $('#modalBigProject').on('click', function () {
        getAllProjects("Big");
    })
    $('#modalMediumProject').on('click', function () {
        getAllProjects("Medium");
    })
    $('#modalSmallProject').on('click', function () {
        getAllProjects("Small");
    })
    $('#modalExpertEngineer').on('click', function () {
        getAllEngineers("Expert");
    })
    $('#modalAverageEngineer').on('click', function () {
        getAllEngineers("Average");
    })
    $('#modalBeginnerEngineer').on('click', function () {
        getAllEngineers("Beginner");
    })

    $('.contentTable').on('click', '.apply_project', function () {
        var selected = $(this).closest('tr');
        var jenisProject;
        if($(this).closest('tbody').attr('id').includes("Big")) {
            jenisProject = "Big";
        } else if($(this).closest('tbody').attr('id').includes("Medium")) {
            jenisProject = "Medium";
        } else if ($(this).closest('tbody').attr('id').includes("Small")) {
            jenisProject = "Small";
        }
        // ID USER LOGIN MASIH HARDCODE
        applyProject('7', jenisProject, selected.index());
    })

    function applyProject(userLogin, jenisProject, projectIndex) {
        $.ajax({
            type: "POST",
            url: '/project/apply',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            dataType: "JSON",
            data: {
                'user'  : userLogin,
                'jenis' : jenisProject,
                'index' : projectIndex
            },
            success: function (data) {
                console.log(data);
                alert("Success");
            },
            error: function (err) {
                console.log(err);
                alert("Failed");
            }
        });
    }

    function getAllProjects(param) {
        $.ajax({
            type: "GET",
            url: '/project/showall/' + param,
            dataType: "JSON",
            data: {},
            success: function (data) {
                var table = $("#tableAll" + param + "Project");
                var thead = table.find("thead");
                var tbody = table.find("tbody");
                tbody.empty();
                var tableHead = "<tr>" +
                    "<th width='80'>Nama Projects</th>" +
                    "<th width='100'>Deskripsi</th>" +
                    "<th width='80'>Durasi</th>" +
                    "<th width='100'>Harga</th>" +
                    "<th width='80'>Pilih</th>" +
                    "</tr>";
                if (data.length < 1) {
                    thead.text("Tidak Ada Proyek Tersedia");
                }
                else {
                    thead.text("");
                    thead.append(tableHead);
                    for (var i = 0; i < data.length; i++) {
                        var projectList = "<tr>";
                        projectList += "<td>" + data[i].nama + "</td>";
                        projectList += "<td>" + data[i].deskripsi + "</td>";
                        projectList += "<td>" + data[i].duration + "</td>";
                        projectList += "<td>" + data[i].min_harga + " - " + data[i].max_harga + "</td>";
                        projectList += '<td><button value="' + data[i].id + '" class="apply_project waves-effect waves-light btn blue-grey darken-4 apply_projects">Apply</button>' +
                            '</td>';

                        projectList += "</tr>";
                        tbody.append(projectList);
                    }
                }
                $("#loader").css("display", "none");
                $("#result").css("display", "block");
            },
            error: function (err) {
                console.log("get projects error");
            }
        });
    }

    function getAllEngineers(param) {
        $.ajax({
            type: "GET",
            url: '/users/showall/' + param,
            dataType: "JSON",
            data: {},
            success: function (data) {
                var table = $("#tableAll" + param + "Engineer");
                var thead = table.find("thead");
                var tbody = table.find("tbody");
                tbody.empty();
                var tableHead = "<tr>" +
                    "<th width='80'>Nama</th>" +
                    "<th width='100'>Universitas</th>" +
                    "</tr>";
                if (Object.keys(data).length < 1) {
                    thead.text("Tidak Ada Enginner Tersedia");
                }
                else {
                    thead.text("");
                    thead.append(tableHead);
                    for (var key in data) {
                        var projectList = "<tr>";
                        projectList += "<td>" + data[key].nama + "</td>";
                        projectList += "<td>" + data[key].univ + "</td>";
                        projectList += "</tr>";
                        tbody.append(projectList);
                    }
                }
                $("#loader").css("display", "none");
                $("#result").css("display", "block");
            },
            error: function (err) {
                console.log("get projects error");
            }
        });
    }

    function getAllProjectsDatatables() {
        $('#tableAllProject').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            ajax: '/project/showall',
            columns: [
                { data: 'nama', name: 'nama' },
                { data: 'deskripsi', name: 'deskripsi' },

                { data: 'durasi', name: 'durasi' },
                { data: 'min_harga', name: 'min_harga' },
                {
                    data: 'id', name: 'id', sortable: false,
                    render: function (data, type, full) {
                        return '<button value="' + data + '"' +
                            'id="apply_projects" class="waves-effect waves-light btn blue-grey darken-4 apply_projects">' +
                            'Apply</button>';
                    }
                }
            ]
        });
    }

});