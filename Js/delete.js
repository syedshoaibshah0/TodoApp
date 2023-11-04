deletes = document.getElementsByClassName("deletes");

Array.from(deletes).forEach((element) => {
    element.addEventListener("click", (e) => {


        console.log("Delete is working !");

        if (confirm("Are you sure you want to delete ! ")) {


            sno = e.target.id.substr(1);
            console.log(sno)
            window.location = `/TODOAPP/home.php?deletevalue=${sno}`;
        } else {

            console.log("not working")
        }
    })
});