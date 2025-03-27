
$(function() {
    var data = {
                id: 1,
                name: "CEO",
                title: "Chief Executive Officer",
                img: "images/kades.png",
                children: [
                    {
                        id: 2,
                        name: "Manager",
                        title: "Department Manager",
                        img: "images/kades.png",
                        children: [
                            {
                                id: 3,
                                name: "Employee",
                                title: "Software Engineer",
                                img: "images/kades.png"
                            }
                        ]
                    },
                    {
                        id: 2,
                        name: "Manager",
                        title: "Department Manager",
                        img: "images/kades.png",
                        children: [
                            {
                                id: 3,
                                name: "Employee",
                                title: "Software Engineer",
                                img: "images/kades.png"
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
                                <img src="${data.img}" alt="${data.name}" style="width: 100px; height: 100px;">
                            </div>
                            <div class="content">${data.title}</div>
                        `;
        },
        'pan':true,
        'zoom':true
    });
});
