
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

function addAd() {
    const adsContainer = document.getElementById('ads_container');
    const adCount = adsContainer.children.length;

    const adItem = document.createElement('div');
    adItem.className = 'ad_item border border-gray-300 rounded-lg';

    const adHeader = document.createElement('div');
    adHeader.className = 'ad_header flex justify-between items-center p-4 bg-gray-100 cursor-pointer';
    adHeader.onclick = function() {
        toggleAdDetails(adHeader);
    };

    const adTitle = document.createElement('h2');
    adTitle.className = 'text-lg font-semibold text-gray-700';
    adTitle.textContent = `Iklan ${adCount + 1}`;

    const toggleIcon = document.createElement('span');
    toggleIcon.className = 'toggle-icon';
    toggleIcon.textContent = '+';

    adHeader.appendChild(adTitle);
    adHeader.appendChild(toggleIcon);

    const adDetails = document.createElement('div');
    adDetails.className = 'ad_details hidden flex flex-col gap-4 p-4';

    const imageInput = document.createElement('input');
    imageInput.type = 'file';
    imageInput.name = `ads[${adCount}][image]`;
    imageInput.accept = 'image/*';
    imageInput.className = 'block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border file:border-gray-300 file:text-gray-700 file:bg-gray-100 hover:file:bg-gray-200 shadow-sm';

    const descriptionTextarea = document.createElement('textarea');
    descriptionTextarea.name = `ads[${adCount}][description]`;
    descriptionTextarea.placeholder = 'Masukkan deskripsi iklan';
    descriptionTextarea.className = 'w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white shadow-sm resize-none';
    descriptionTextarea.rows = 4;

    const subDescriptionTextarea = document.createElement('textarea');
    subDescriptionTextarea.name = `ads[${adCount}][sub_description]`;
    subDescriptionTextarea.placeholder = 'Masukkan sub deskripsi iklan';
    subDescriptionTextarea.className = 'w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white shadow-sm resize-none';
    subDescriptionTextarea.rows = 3;

    const pointsContainer = document.createElement('div');
    pointsContainer.id = `points_container_${adCount}`;
    pointsContainer.className = 'space-y-2';

    const pointItem = document.createElement('div');
    pointItem.className = 'point_item flex items-center gap-4';

    const pointInput = document.createElement('input');
    pointInput.type = 'text';
    pointInput.name = `ads[${adCount}][points][]`;
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

    const addPointButton = document.createElement('button');
    addPointButton.type = 'button';
    addPointButton.className = 'px-4 py-2 text-white bg-green-500 rounded-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-400';
    addPointButton.textContent = 'Tambah Poin';
    addPointButton.onclick = function() {
        addPoint(adCount);
    };

    const removeAdButton = document.createElement('button');
    removeAdButton.type = 'button';
    removeAdButton.className = 'px-4 py-2 text-white bg-red-500 rounded-lg hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400';
    removeAdButton.textContent = 'Hapus Iklan';
    removeAdButton.onclick = function() {
        removeAd(removeAdButton);
    };

    adDetails.appendChild(imageInput);
    adDetails.appendChild(descriptionTextarea);
    adDetails.appendChild(subDescriptionTextarea);
    adDetails.appendChild(pointsContainer);
    adDetails.appendChild(addPointButton);
    adDetails.appendChild(removeAdButton);

    adItem.appendChild(adHeader);
    adItem.appendChild(adDetails);

    adsContainer.appendChild(adItem);
}
function removeAd(button) {
    const adItem = button.closest('.ad_item');
    adItem.remove();
}

function addPoint(adIndex) {
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
