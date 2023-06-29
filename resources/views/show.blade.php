<h1>Название заметки</h1>
<script src="{{ asset('js/jquery.js') }}"></script>
<script>
    let url = window.location.href;
    let id = url.substring(url.lastIndexOf('/') + 1);
    console.log(id);

    $.ajax({
    url: `http://127.0.0.1:8000/api/notes/${id}`,
    type: "GET",
    dataType: 'json',
    success: function (data) {
        console.log(data)
        console.log(data.id)
        console.log(data.name)

        const note = data.response.data;
        // $('#name').val(data.name);
        // $('#description').val(data.description);
        alert('2');
    }
});
    
</script>