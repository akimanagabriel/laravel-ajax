const select = $('#provinceSelector')
const resultElement = $("#results").addClass("hidden")


select.change((e) => {
    handleChange(e.target.value)
})

// handle select change
const handleChange = v => {
    const url = `http://localhost:8000/api/districts/${v}`
    $.ajax({
        url,
        method: "GET",
        dataType: "json",
        beforeSend: function () {
            $("#results").addClass("hidden")
            $("#loader").removeClass("hidden")
        },
        success: function (data) {
            // display data into ordered list
            console.log(data)
            if (data.length > 0) {
                const orderedList = $("<ul>")
                data.forEach(region => {
                    const listItem = $("<li>")
                    listItem.text(`${region.district}`)
                    orderedList.append(listItem)
                });
                resultElement.html(`<h1 class='text-2xl mb-2'>Districts of ${v} ${v == 'Kigali' ? 'city' : 'province'}</h1>`)
                resultElement.append(orderedList).removeClass("hidden")
            } else {
                resultElement.html(`<div class="text-red-600">No data found</div>`)
            }

            $("#loader").addClass("hidden")
        },
        error: function (error) {
            // Handle any errors that occur during the request
            $("#results").html(`<span class='text-red-600'>${error.responseJSON.message}</span>`)
            console.log(error);
        }
    });

}

