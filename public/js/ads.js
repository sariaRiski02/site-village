
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


function showAds(ads){
    const ads_container = document.getElementById('ads_container');

    ads.forEach((item)=>{

        // box ads
        const boxAds = document.createElement('div');
        boxAds.id = `boxAds_${item.id}`;
        boxAds.className = 'ad_item border border-gray-300 rounded-lg';


        // header box ads
        const headerBoxAds = document.createElement('div');
        headerBoxAds.id = `headerBoxAds_${item.id}`;
        headerBoxAds.className = 'ad_header flex justify-between items-center p-4 bg-gray-100 cursor-pointer';
        headerBoxAds.onclick = toggleAdDetails(this);


        // title ads
        const title_ads = document.createElement('h2');
        title_ads.id = `title_ads_${item.id}`;
        title_ads.className = 'text-lg font-semibold text-gray-700';


        // toggle icon
        const toggle_icon = document.createElement('span');
        toggle_icon.className = 'toggle-icon';


        // ads details
        const ads_detail = document.createElement('div');
        ads_detail.id = `ads_detail_${item.id}`;
        ads_detail.className = 'ad_details hidden flex-col gap-4 p-4';


        // tags form for ads
        const form = document.createElement('form');
        form.id = 'myform';
        form.method = 'POST';


        //input box for title
        const inputTitleBox = document.createElement('div');
        inputTitleBox.className = 'flex flex-col gap-2';

        // lable for input title
        const lableInputTitle = document.createElement('label');
        lableInputTitle.for = `ads_${item.id}_title`;
        lableInputTitle.textContent = 'Masukan judul iklan';

        // input title
        const inputTitle = document.createElement('input');
        inputTitle.type = 'text';
        inputTitle.name = `ads_title_${item.id}`;
        inputTitle.id = `input_title_ads_${item.id}`;
        inputTitle.className = 'w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white shadow-sm';
        inputTitle.placeholder = "Masukan judul iklan";



        // input for image
        const inputImageHero = document.createElement('input');
        inputImageHero.type ='file';
        inputImageHero.name =`ads_image_${item.id}`;
        inputImageHero.accept = 'image/*';
        inputImageHero.className = 'block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border file:border-gray-300 file:text-gray-700 file:bg-gray-100 hover:file:bg-gray-200 shadow-sm';

        // textarea fro description
        const description = document.createElement('textarea');
        description.name=`ads_description_${item.id}`;
        description.placeholder = `Masukkan deskripsi iklan`;
        description.className = 'w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white shadow-sm resize-none';
        description.rows='4';
        description.id=`ads_description_${item.id}`
        
        // textarea for sub description
        const subDescription = document.createElement('textarea');
        subDescription.name = `ads_sub_description_${item.id}`;
        subDescription.placeholder = 'Masukkan sub deskripsi iklan';
        subDescription.className = 'w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white shadow-sm resize-none';
        subDescription.rows='3';
        subDescription.id = `ads_sub_description_${item.id}`;


        // box for link input 
        const boxLink = document.createElement('div');
        boxLink.className = 'flex flex-col gap-2';
        boxLink.id = `box_link_${item.id}`;

        // lable for input link
        const lableInputLink = document.createElement('lable');
        lableInputLink.for = `ads_link_${item.id}`;
        lableInputLink.className = 'text-sm text-gray-600';

        // input for link
        const inputLink = document.createElement('input');
        inputLink.type = 'url';
        inputLink.name = `ads_url_${item.id}`;
        inputLink.placeholder = "Masukkan link";
        inputLink.className = 'w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white shadow-sm';
        


        // points container
        const pointContainer = document.createElement('div');
        pointContainer.id = 'points_container_0';
    });
}



$(document).ready(function (){
    $.ajax({
        url: '/api/ads',
        method: 'GET',
        success: function (response){
            console.log(response);
            showAds(response.data);
        },
        error: function (error){
            console.log('Error fetching ads:', error);
        }

    })
});




// function addAd(ads) {
//     const adsContainer = document.getElementById('ads_container');

//     const adItem = document.createElement('div');
//     adItem.className = 'ad_item border border-gray-300 rounded-lg';

//     const adHeader = document.createElement('div');
//     adHeader.className = 'ad_header flex justify-between items-center p-4 bg-gray-100 cursor-pointer';

//     adHeader.onclick = function() {
//         toggleAdDetails(adHeader);
//     };
    
//     const adTitle = document.createElement('h2');
//     adTitle.className = 'text-lg font-semibold text-gray-700';
//     adTitle.textContent = ads.title_ads;

//     const toggleIcon = document.createElement('span');
//     toggleIcon.className = 'toggle-icon';
//     toggleIcon.textContent = '+';

//     adHeader.appendChild(adTitle);
//     adHeader.appendChild(toggleIcon);

//     const adDetails = document.createElement('div');
//     adDetails.className = 'ad_details hidden flex-col gap-4 p-4';

//     const form = document.createElement('form');
//     form.method = 'POST';

//     const titleInputContainer = document.createElement('div');
//     titleInputContainer.className = 'flex flex-col gap-2';

//     const titleLabel = document.createElement('label');
//     titleLabel.textContent = 'Masukkan judul iklan';
//     titleLabel.className = 'text-sm text-gray-600';

//     const titleInput = document.createElement('input');
//     titleInput.type = 'text';
//     titleInput.name = `ads_title`;
//     titleInput.placeholder = 'Masukkan judul iklan';
//     titleInput.className = 'w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white shadow-sm';

//     titleInputContainer.appendChild(titleLabel);
//     titleInputContainer.appendChild(titleInput);

//     const imageInput = document.createElement('input');
//     imageInput.type = 'file';
//     imageInput.name = `ads_image`;
//     imageInput.accept = 'image/*';
//     imageInput.className = 'block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border file:border-gray-300 file:text-gray-700 file:bg-gray-100 hover:file:bg-gray-200 shadow-sm';

//     const descriptionTextarea = document.createElement('textarea');
//     descriptionTextarea.name = `ads_description`;
//     descriptionTextarea.placeholder = 'Masukkan deskripsi iklan';
//     descriptionTextarea.className = 'w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white shadow-sm resize-none';
//     descriptionTextarea.rows = 4;

//     const subDescriptionTextarea = document.createElement('textarea');
//     subDescriptionTextarea.name = `ads_subdescription`;
//     subDescriptionTextarea.placeholder = 'Masukkan sub deskripsi iklan';
//     subDescriptionTextarea.className = 'w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white shadow-sm resize-none';
//     subDescriptionTextarea.rows = 3;

//     const linkInputContainer = document.createElement('div');
//     linkInputContainer.className = 'flex flex-col gap-2';

//     const linkLabel = document.createElement('label');
//     linkLabel.textContent = 'Masukkan link (bisa berupa link WhatsApp, sosial media, email, dll.)';
//     linkLabel.className = 'text-sm text-gray-600';

//     const linkInput = document.createElement('input');
//     linkInput.type = 'url';
//     linkInput.name = `ads_link`;
//     linkInput.placeholder = 'Masukkan link';
//     linkInput.className = 'w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white shadow-sm';

//     linkInputContainer.appendChild(linkLabel);
//     linkInputContainer.appendChild(linkInput);

//     const pointsContainer = document.createElement('div');
//     pointsContainer.id = `points_container_${ads.id}`;
//     pointsContainer.className = 'space-y-2 my-2';

//     const pointContainer = document.getElementById(`points_container_${ads.id}`);
//     ads.point_ads.forEach(function(item){
//         inputPoint(pointContainer,item.id);
//     });

//     const addPointButton = document.createElement('button');
//     addPointButton.type = 'button';
//     addPointButton.className = 'px-4 py-2 text-white bg-green-500 rounded-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-400';
//     addPointButton.textContent = 'Tambah Poin';
//     addPointButton.onclick = function() {
//         addPoint(ads.id);
//     };


//     const saveAdButton = document.createElement('button');
//     saveAdButton.type = 'submit';
//     saveAdButton.className = 'px-4 py-2 text-white bg-blue-500 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400';
//     saveAdButton.textContent = 'Simpan Iklan';

//     const deleteAdForm = document.createElement('form');
//     deleteAdForm.method = 'POST';
//     deleteAdForm.className = 'inline w-full';

//     const deleteAdButton = document.createElement('button');
//     deleteAdButton.type = 'submit';
//     deleteAdButton.className = 'w-full px-4 py-2 text-white bg-red-500 rounded-lg hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400';
//     deleteAdButton.textContent = 'Hapus Iklan';

//     deleteAdForm.appendChild(deleteAdButton);

//     const publishAdForm = document.createElement('form');
//     publishAdForm.method = 'POST';
//     publishAdForm.className = 'inline w-full';

//     const publishAdButton = document.createElement('button');
//     publishAdButton.type = 'submit';
//     publishAdButton.className = 'w-full px-4 py-2 text-white bg-yellow-500 rounded-lg hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-400';
//     publishAdButton.textContent = 'Publikasikan Iklan';

//     publishAdForm.appendChild(publishAdButton);

//     const actionContainer = document.createElement('div');
//     actionContainer.className = 'flex flex-row gap-4 flex-wrap';
//     actionContainer.appendChild(deleteAdForm);
//     actionContainer.appendChild(publishAdForm);

//     form.appendChild(titleInputContainer);
//     form.appendChild(imageInput);
//     form.appendChild(descriptionTextarea);
//     form.appendChild(subDescriptionTextarea);
//     form.appendChild(linkInputContainer);
//     form.appendChild(pointsContainer);
//     form.appendChild(addPointButton);
//     form.appendChild(saveAdButton);

//     adDetails.appendChild(form);
//     adDetails.appendChild(document.createElement('hr'));
//     adDetails.appendChild(actionContainer);

//     adItem.appendChild(adHeader);
//     adItem.appendChild(adDetails);

//     adsContainer.appendChild(adItem);
// }
// function removeAd(button) {
//     const adItem = button.closest('.ad_item');
//     adItem.remove();
// }

// function addPoint(adIndex) {
//     const pointsContainer = document.getElementById(`points_container_${adIndex}`);
//     inputPoint(pointsContainer,pointIndex);
// }

// function inputPoint(pointsContainer,pointIndex){
//     const pointItem = document.createElement('div');
//     pointItem.className = 'point_item flex items-center gap-4';

//     const pointInput = document.createElement('input');
//     pointInput.type = 'text';
//     pointInput.name = `ads_point_${pointIndex}`;
//     pointInput.placeholder = 'Masukkan poin penting';
//     pointInput.className = 'w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white shadow-sm';

//     const removePointButton = document.createElement('button');
//     removePointButton.type = 'button';
//     removePointButton.className = 'px-3 py-2 text-white bg-red-500 rounded-lg hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400';
//     removePointButton.textContent = 'Hapus';
//     removePointButton.onclick = function() {
//         removePoint(removePointButton);
//     };
//     pointItem.appendChild(pointInput);
//     pointItem.appendChild(removePointButton);
//     pointsContainer.appendChild(pointItem);
// }

// function removePoint(button) {
//     const pointItem = button.closest('.point_item');
//     pointItem.remove();
// }