Array.from(edits).forEach((element) => {

    element.addEventListener("click", (e) => {

        tr = e.target.parentNode.parentNode;
        Name = tr.getElementByTagName["td"][1].innerText;
        Desc = tr.getElementByTagName["td"][2].innerText;
        Datee = tr.getElementByTagName["td"][3].innerText;
        Time = tr.getElementByTagName["td"][4].innerText;
        Contact = tr.getElementByTagName["td"][5].innerText;
        Loc = tr.getElementByTagName["td"][6].innerText;

        console.log(Name, Desc, Datee, Time, Contact, Loc);
        
        EdittName.value = Name;
        EdittDesc.value = Desc;
        EdittDate.value = Datee;
        EdittTime.value = Time;
        EdittContact.value = Contact;
        EdittLocation.value = Loc;
        EdittID.value = e.target.id;
        $('#EditID').modal('toggle');
    });
});














// edits = document.getElementsByClassName("edits");

// Array.from(edits).forEach((element) => {
//     element.addEventListener("click", (e) => {
//         tr = e.target.parentNode.parentNode;

//         name = tr.getElementsByTagName("td")[1].innerText;
//         Description = tr.getElementsByTagName("td")[2].innerText;
//         Date = tr.getElementsByTagName("td")[3].innerText;
//         Time = tr.getElementsByTagName("td")[4].innerText;
//         Contact = tr.getElementsByTagName("td")[5].innerText;
//         Location = tr.getElementsByTagName("td")[6].innerText;

//         console.log(name, Description, Date, Time, Contact, Location);

//         Ename.value = name;
//         EDesc.value = Description;
//         EDate.value = Date;
//         ETime.value = Time;
//         EContact.value = Contact;
//         ELocation.value = Location;
//         EdittID.value = e.target.id;
//         $('#exampleModal').modal('toggle');
//     });
// });