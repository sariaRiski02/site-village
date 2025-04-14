
function toggleAdDetails(header) {
    const details = header.nextElementSibling;
    const icon = header.querySelector('.toggle-icon');
    if (details.classList.contains('hidden')) {
        details.classList.remove('hidden');
        details.classList.add('flex');
        icon.textContent = '-';
    } else {
        details.classList.add('hidden');
        details.classList.remove('flex');
        icon.textContent = '+';
    }
}

function addPoint(adIndex) {
    addPointApi();
    const pointsContainer = document.getElementById(`points_container_${adIndex}`);
    const pointItem = document.createElement('div');
    pointItem.className = 'point_item flex items-center gap-4';

    const pointInput = document.createElement('input');
    pointInput.type = 'text';
    pointInput.name = `ads[${adIndex}][points][]`;
    pointInput.placeholder = 'Masukkan poin penting';
    pointInput.className = 'w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white shadow-sm';

    const removePointButton = document.createElement('button');
    removePointButton.type = 'button';
    removePointButton.className = 'px-3 py-2 text-white bg-red-500 rounded-lg hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400';
    removePointButton.textContent = 'Hapus';
    removePointButton.onclick = function() {
        removePoint(removePointButton);
    };

    pointItem.appendChild(pointInput);
    pointItem.appendChild(removePointButton);
    pointsContainer.appendChild(pointItem);
}

function removePoint(button) {
    const pointItem = button.closest('.point_item');
    pointItem.remove();
}


function addPointApi(){
    $.ajax({
        'url' : '/add-point',
        'method': 'POST',
        'data' : {},
        'response': function(response){
            console.log(response);
        }
    });
}