
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

function addPoint(id){
    
    addPointApi(id,function(err, res){
        if(err){
            console.log(err);
        }else{
            const idPoint = res.data.id;
            makePoint(id, idPoint);
        }
    });
}


function makePoint(adIndex, idPoint) {
    const pointsContainer = document.getElementById(`points_container_${adIndex}`);
    const pointItem = document.createElement('div');
    pointItem.className = 'point_item flex items-center gap-4';

    const pointInput = document.createElement('input');
    pointInput.type = 'text';
    pointInput.placeholder = 'Masukkan poin penting';
    pointInput.name = idPoint;
    pointInput.className = 'w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white shadow-sm';

    const removePointButton = document.createElement('button');
    removePointButton.type = 'button';
    removePointButton.id = idPoint;
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
    deletePointApi(button.id, function(err, res){
        if(err){
            console.log(err);
        }else{
            const pointItem = button.closest('.point_item');
            pointItem.remove();
        }
    })
    
}


function addPointApi(id, callback){
  $.ajax({
        'url' : '/api/add-point/' + id,
        'method': 'POST'
    })
    .done(function(response){
        callback(null, response)
    })
    .fail(function(jqXHR, textStatus, errorThrown) {
        callback(errorThrown, null);
    });
    
}

function deletePointApi(id, callback){
    $.ajax({
        'url': '/api/delete-point/' + id,
        'method': 'DELETE',
        'data': {
            '_method': 'DELETE'
        }
    }).done(function(response){
        callback(null, response);
    }).fail(function(errorThrown){
        callback(errorThrown, null);
    });
}