<h1>Список заметок</h1>

<ul class='red'>
    <li>1</li>
    <li>2</li>
    <li>3</li>
    <li>4</li>
</ul>
<div class="main" id='main'></div>
<script src="{{ asset('js/jquery.js') }}"></script>
<!-- <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script> -->
<!-- <script src="{{ asset('js/app.js') }}"></script> -->

<script>
        console.log('lol');

    $(document).ready(function(){
//     $.ajax({
//         url: `http://127.0.0.1:8000/api/notes`,
//         method: 'get',
//         dataType: 'json',
//         success: function (data) {
//         const notes = data.response.data;
//         console.log(notes);
//         notes.forEach(note => {
//             wrapper_note_table.append(`
//             <a href="http://127.0.0.1:8000/notes/${note.id}/edit"> 
//             <div>123</div>
//             </a>`);
//         });
//         }
// });

$.ajax({
			type: "GET",
			url: 'http://127.0.0.1:8000/api/notes',
			dataType: 'json',
 
			success: function(data){
                console.log(data);
				// const notes = JSON.parse(data);
                // console.log(notes);
                const main = document.getElementById("main");
                data.forEach(note => {
                    console.log(note);
                    const para = document.createElement("p");
                    const node = document.createTextNode(note.id);
                    para.appendChild(node);
                    main.appendChild(para);
                    // main.appendChild(`
                    //     <a href="http://127.0.0.1:8000/notes/${note.id}/edit"> 
                    //     <div>123</div></a>`
                    //     )
                });
			}
		});

    });

</script>