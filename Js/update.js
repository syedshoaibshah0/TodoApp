edits = document.getElementsByClassName("edits");

Array.from(edits).forEach((element) => {
    element.addEventListener("click", (e) => {
        tr = e.target.parentNode.parentNode;

        name = tr.getElementsByTagName("td")[1].innerText;
        Description = tr.getElementsByTagName("td")[2].innerText;
        Date = tr.getElementsByTagName("td")[3].innerText;
        Time = tr.getElementsByTagName("td")[4].innerText;
        Contact = tr.getElementsByTagName("td")[5].innerText;
        Location = tr.getElementsByTagName("td")[6].innerText;

        console.log(name, Description, Date, Time, Contact, Location);

        Ename.value = name;
        EDesc.value = Description;
        EDate.value = Date;
        ETime.value = Time;
        EContact.value = Contact;
        ELocation.value = Location;
        EdittID.value = e.target.id;
        $('#exampleModal').modal('toggle');
    });
});