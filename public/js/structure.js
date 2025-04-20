$(function () {
    if (!Array.isArray(tree)) {
        console.error('Invalid data format from server');
        return;
    }
    
    const data = tree[0];
    const $chartContainer = $('#chart-container');
    
    // Pastikan container cukup lebar
    $chartContainer.css({
        'width': '90vw',
        'margin': '0 auto',
    });
    
    const chart = $chartContainer.orgchart({
        data: data,
        nodeContent: 'title',
        pan: true,
        zoom: true,
        nodeAlign: 'center',
        exportButton: true,
        exportFilename: 'OrganizationChart',
        parentNodeSymbol: 'fa-th-large',
        draggable: false,
        direction: 't2b', // Eksplisit arah dari atas ke bawah
        chartClass: 'centered-chart', // Tambahkan kelas kustom
        chartClass: 'blue-theme',
        createNode: function ($node, data) {
            // Kode node Anda tetap sama
            const img = data.image ?? 'default-profile.png';
            const template = `
                <div class="flex flex-col items-center" style="color: #071952;">
                    <img class="rounded-full w-20 h-20 object-cover mb-2" src="/images/${img}" alt="${data.name}">
                    <div class="font-semibold text-sm">${data.name}</div>
                    <div class="text-xs" style="color: #07195299;">${data.title}</div>
                </div> 
            `; 
            $node.html(template);
        }
    });
    
    // Tambahkan CSS untuk memaksa posisi tengah
    $('<style>')
        .prop('type', 'text/css')
        .html(`
            .centered-chart {
                text-align: center !important;
            }
            .centered-chart table {
                margin: 0 auto !important;
            }
            .orgchart .nodes {
                display: flex;
                justify-content: center;
            }
            .orgchart .hierarchy {
                text-align: center;
            }
        `)
        .appendTo('head');
});

$('#download-btn').on('click', function () {
    html2canvas(document.querySelector('#chart-container')).then(canvas => {
        const link = document.createElement('a');
        link.download = 'struktur-pemerintahan.png';
        link.href = canvas.toDataURL();
        link.click();
    });
});