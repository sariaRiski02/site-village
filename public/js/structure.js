
$(function() {
    var data = {
                id: 1,
                name: "CEO",
                title: "Chief Executive Officer",
                img: "{{ asset('images/kades.png') }}",
                children: [
                    {
                        id: 2,
                        name: "Manager",
                        title: "Department Manager",
                        img: "{{ asset('images/kades.png') }}",
                        children: [
                            {
                                id: 3,
                                name: "Employee",
                                title: "Software Engineer",
                                img: "{{ asset('images/kades.png') }}"
                            }
                        ]
                    },
                    {
                        id: 2,
                        name: "Manager",
                        title: "Department Manager",
                        img: "{{ asset('images/kades.png') }}",
                        children: [
                            {
                                id: 3,
                                name: "Employee",
                                title: "Software Engineer",
                                img: "{{ asset('images/kades.png') }}"
                            }
                        ]
                    }
                ]
            };


    var chart = $('#chart-container').orgchart({
        'data': data,
        'nodeContent': 'title',
        'nodeTemplate': function(data) {
            return `
                <div class="title">${data.name}</div>
                <div class='flex justify-center border'>
                    <img src="${data.img}" class='border' alt="${data.name}">
                </div>
                <div class="content">${data.title}</div>
            `;
        }
    });
});
