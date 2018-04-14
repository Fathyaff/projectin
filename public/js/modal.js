$(document).ready(function() {
    getAllBigProjects();
    getAllSmallProjects();
    getAllMediumProjects();
    getAllExpertEnginners();
    getAllAverageEnginners();
    getAllBeginnerEnginners();

    function getAllBigProjects(){
        getAllProjects("Big");
    }
    
    function getAllMediumProjects(){
        getAllProjects("Medium");
    }

    function getAllSmallProjects(){
        getAllProjects("Small");
    }

    function getAllBeginnerEnginners(){
        getAllEngineers("Beginner");
    }
    
    function getAllAverageEnginners(){
        getAllEngineers("Average");
    }

    function getAllExpertEnginners(){
        getAllEngineers("Expert");
    }

    function getAllProjects(param){
        $.ajax({
            type: "GET",
            url: '/project/showall/' + param ,
            dataType: "JSON",
            data:{} ,
            success: function(data) {
                var table = $("#tableAll"+param +"Project");
                var thead = table.find("thead");
                var tbody = table.find("tbody");
                tbody.empty();
                var tableHead = "<tr>"+
                            "<th width='80'>Nama Projects</th>"+
                            "<th width='100'>Deskripsi</th>"+
                            "<th width='80'>Durasi</th>"+
                            "<th width='100'>Harga</th>"+
                            "<th width='80'>Pilih</th>"+
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
                            projectList += '<td><button value="' + data[i].id + '"' +
                            'id="apply_project" class="waves-effect waves-light btn blue-grey darken-4 apply_projects">Apply</button>' +
                            '</td>';
                            
                            projectList += "</tr>";
                            tbody.append(projectList);
                        }
                }
                $("#loader").css("display", "none");
                $("#result").css("display", "block");
            },
            error: function(err) {
                console.log("get projects error");
            }
        });
    }

    function getAllEngineers(param){
        $.ajax({
            type: "GET",
            url: '/users/showall/' + param ,
            dataType: "JSON",
            data:{} ,
            success: function(data) {
                var table = $("#tableAll"+param +"Engineer");
                var thead = table.find("thead");
                var tbody = table.find("tbody");
                tbody.empty();
                var tableHead = "<tr>"+
                            "<th width='80'>Nama</th>"+
                            "<th width='100'>Universitas</th>"+
                        "</tr>";
                if (data.length < 1) {
                    thead.text("Tidak Ada Enginner Tersedia");
                }
                else {
                    thead.text("");
                    thead.append(tableHead);
                        for (var i = 0; i < data.length; i++) {
                            var projectList = "<tr>";
                            projectList += "<td>" + data[i].nama + "</td>";
                            projectList += "<td>" + data[i].univ + "</td>";
                            projectList += "</tr>";
                            tbody.append(projectList);
                        }
                }
                $("#loader").css("display", "none");
                $("#result").css("display", "block");
            },
            error: function(err) {
                console.log("get projects error");
            }
        });
    }

    function getAllProjectsDatatables(){
        $('#tableAllProject').DataTable({
            processing : true,
            serverSide : true,
            responsive : true,
            ajax: '/project/showall',
            columns : [
                {data : 'nama', name :'nama'},
                {data : 'deskripsi', name : 'deskripsi'},
                
                {data : 'durasi', name : 'durasi'},
                {data : 'min_harga', name : 'min_harga'},
                {data : 'id', name : 'id', sortable : false,
                    render : function (data, type, full){
                        return '<button value="' + data + '"' +
                            'id="apply_projects" class="waves-effect waves-light btn blue-grey darken-4 apply_projects">' +
                            'Apply</button>';
                    }
                }
        ]});
    }

});