var script1 = document.createElement('script');
var script2 = document.createElement('script');
script1.src = "https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js";
script2.src = "https://cdn.tailwindcss.com";

//This will create the table columns along with the data

fetch('../public/fetch.php')
    .then(response => response.json())
    .then(data => {
        const tableBody = document.getElementById("studentTable");

        if (tableBody) {
            console.log("existsss11");
        }
        data.forEach(item => {
            const row = document.createElement('tr');


            const nameCell = document.createElement('td');
            nameCell.classList.add("px-6", "py-4", "whitespace-nowrap", "text-sm", "font-normal",
                "text-gray-800", "bg-white");
            const subjectCell = document.createElement('td');
            subjectCell.classList.add("px-6", "py-4", "whitespace-nowrap", "text-sm", "font-normal",
                "text-gray-800", "bg-white");
            const markCell = document.createElement('td');
            markCell.classList.add("px-6", "py-4", "whitespace-nowrap", "text-sm", "font-normal",
                "text-gray-800", "bg-white");
            const editCell = document.createElement('td');
            editCell.classList.add("px-6", "py-4", "whitespace-nowrap", "text-end", "text-sm",
                "font-normal", "bg-white");

            const edit = document.createElement('button');
            edit.type = "button";
            edit.classList.add("btn", "editBtn",  "dropdown-toggle", "border", "rounded-5");
            edit.role = "button";
            edit.id = "dropdownMenuLink";
            edit.style = "display: inline-block;";
            edit.setAttribute("data-bs-toggle", "dropdown");
            edit.setAttribute("aria-haspopup", "true");
            edit.setAttribute("aria-expanded", "false");
            edit.setAttribute("data-mdb-ripple-init", "");
            edit.setAttribute("aria-expanded", "");
            edit.setAttribute("data-mdb-dropdown-init", "");
            edit.setAttribute("data-mdb-dropdown-initialized", "true");
 

            const dropDownContent = document.createElement('div');
            dropDownContent.classList.add("dropdown-menu");
            dropDownContent.setAttribute("aria-labelledby", "dropdownMenuLink");

            const editOption = document.createElement('a');
            editOption.classList.add("dropdown-item");
            editOption.setAttribute("data-bs-toggle", "modal");
            editOption.setAttribute("data-bs-target", "#updateStudentDetails");

            const deleteOption = document.createElement('button');
            deleteOption.classList.add("dropdown-item");
            deleteOption.setAttribute("data-bs-toggle", "modal");
            deleteOption.setAttribute("data-bs-target", "#deleteConfirmation");

            deleteOption.textContent = "DELETE";
            editOption.textContent = "UPDATE";


            nameCell.textContent = item.name;
            subjectCell.textContent = item.subject;
            markCell.textContent = item.marks;
            edit.textContent = "Edit";

            console.log("namecell: " + nameCell.textContent);
            console.log("markcell: " + markCell);
            console.log("edittt: " + edit.textContent);

            row.appendChild(nameCell);
            row.appendChild(subjectCell);
            row.appendChild(markCell);
            edit.appendChild(dropDownContent);
            dropDownContent.appendChild(editOption);
            dropDownContent.appendChild(deleteOption);
            editCell.appendChild(edit);


            row.appendChild(editCell);

            edit.dataset.id = item.id;
            edit.dataset.name = item.name;
            edit.dataset.subject = item.subject;
            edit.dataset.marks = item.marks;

            console.log("fetch wala: " + row);

            tableBody.appendChild(row);

        });
    })
    .catch(error => {
        console.error('Error:', error);
    });

$(document).on('click', '.editBtn', function() {
    const id = $(this).data('id');
    const name = $(this).data('name');
    const marks = $(this).data('marks');
    const subject = $(this).data('subject');


    console.log(id,name,marks,subject);
    $('#deleteConfirmation #recordId').val(id);
    $('#deleteConfirmation #stdName').val(name);
    $('#deleteConfirmation #subject').val(subject);
    $('#deleteConfirmation #marks').val(marks);
    $('#updateStudentDetails #recordId').val(id);
    $('#updateStudentDetails #stdName').val(name);
    $('#updateStudentDetails #subject').val(subject);
    $('#updateStudentDetails #marks').val(marks);



});
