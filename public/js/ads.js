
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
        headerBoxAds.onclick = function() {
            toggleAdDetails(this);
        }


        // title ads
        const titleAds = document.createElement('h2');
        titleAds.id = `title_ads_${item.id}`;
        titleAds.className = 'text-lg font-semibold text-gray-700';
        titleAds.textContent = item.title_ads;


        // toggle icon
        const toggleIcon = document.createElement('span');
        toggleIcon.className = 'toggle-icon';
        toggleIcon.textContent = '+';

 
        // ads details
        const adsDetailBox = document.createElement('div');
        adsDetailBox.id = `ads_detail_${item.id}`;
        adsDetailBox.className = 'ad_details hidden flex-col gap-4 p-4';


        // tags form for ads
        const formAds = document.createElement('form');
        formAds.id = `myform_[id]`;
        formAds.method = 'POST';


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
        inputTitle.className = 'w-full px-4 py-2 my-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white shadow-sm';
        inputTitle.placeholder = "Masukan judul iklan";



        // input for image
        const inputImageHero = document.createElement('input');
        inputImageHero.type ='file';
        inputImageHero.name =`ads_image_${item.id}`;
        inputImageHero.accept = 'image/*';
        inputImageHero.className = 'block w-full text-sm text-gray-500 file:mr-4 file:py-2 my-2 file:px-4 file:rounded-lg file:border file:border-gray-300 file:text-gray-700 file:bg-gray-100 hover:file:bg-gray-200 shadow-sm';

        // textarea fro description
        const description = document.createElement('textarea');
        description.name=`ads_description_${item.id}`;
        description.placeholder = `Masukkan deskripsi iklan`;
        description.className = 'w-full px-4 py-3 my-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white shadow-sm resize-none';
        description.rows='4';
        description.id=`ads_description_${item.id}`
        
        // textarea for sub description
        const subDescription = document.createElement('textarea');
        subDescription.name = `ads_sub_description_${item.id}`;
        subDescription.placeholder = 'Masukkan sub deskripsi iklan';
        subDescription.className = 'w-full px-4 py-3 my-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white shadow-sm resize-none';
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
        inputLink.className = 'w-full px-4 py-2 my-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white shadow-sm';
        


        // points container
        const pointContainer = document.createElement('div');
        pointContainer.id = `points_container_${item.id}`;

        // point box
        const pointBox = document.createElement('div');
        pointBox.className = 'point_item flex flex-col items-center gap-4';
        item.point_ads.forEach((point)=>{

            const containerPoint = document.createElement('div');
            containerPoint.className = 'flex gap-2 w-full';

            // input point
            const inputPoint = document.createElement('input');
            inputPoint.type = 'text';
            inputPoint.name = `point_ads_${point.id}`;
            inputPoint.id = `point_ads_${point.id}`;
            inputPoint.value = point.point;
            inputPoint.placeholder = 'Masukan Poin penting';
            inputPoint.className = 'w-full px-4 py-2 my-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white shadow-sm';
    
            // delete point
            const buttonDeletePoint = document.createElement('button');
            buttonDeletePoint.type = 'button';
            buttonDeletePoint.id = `delete_id_${point.id}`;
            buttonDeletePoint.className = 'px-3 py-2 my-2 text-white bg-red-500 rounded-lg hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400';
            buttonDeletePoint.onclick = () => {
                 removePoint(this)
                };
            buttonDeletePoint.textContent = "Hapus";
            containerPoint.appendChild(inputPoint);
            containerPoint.appendChild(buttonDeletePoint);
            pointBox.appendChild(containerPoint);
        });

        // boxAds_add_and_save_point
        const boxAdsAddSave = document.createElement('div');
        boxAdsAddSave.className = 'flex flex-wrap justify-end gap-4 mt-4';

        // button for add point;
        const AddPointButton = document.createElement('button');
        AddPointButton.className = 'px-4 py-2 my-2 text-white bg-green-500 rounded-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-400';
        AddPointButton.textContent = "Tambah Poin";


        // button for save point
        const saveAdsButton = document.createElement('button');
        saveAdsButton.type = 'button';
        saveAdsButton.className = 'px-4 py-2 my-2 text-white bg-blue-500 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400';
        saveAdsButton.textContent = "Simpan Iklan";


        // border
        const border = document.createElement('hr');
        border.className = 'w-full border-t border-gray-300 my-4';

        // box publish and delete ads
        const boxPublishDeleteAdsContainer = document.createElement('div');
        boxPublishDeleteAdsContainer.className = 'flex flex-row gap-4 flex-wrap';

        // delete ads button
        const deleteAdsButton = document.createElement('button');
        deleteAdsButton.type = 'button';
        deleteAdsButton.className = 'w-full px-4 py-2 my-2 text-white bg-red-500 rounded-lg hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400';
        deleteAdsButton.textContent = "Hapus Iklan";


        // publish button
        const publishAdsButton = document.createElement('button');
        publishAdsButton.className = 'w-full px-4 py-2 my-2 text-white bg-yellow-500 rounded-lg hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-400';
        publishAdsButton.textContent = 'Publikasi Iklan'; 


        

        // base 1
        
        


        // base 2
        boxLink.appendChild(lableInputLink)
        boxLink.appendChild(inputLink);
        pointContainer.appendChild(pointBox);
        boxAdsAddSave.appendChild(AddPointButton);
        boxAdsAddSave.appendChild(saveAdsButton);
        inputTitleBox.appendChild(lableInputTitle);
        inputTitleBox.appendChild(inputTitle);


        // base 3
        formAds.appendChild(inputTitleBox);
        formAds.appendChild(inputImageHero);
        formAds.appendChild(description);
        formAds.appendChild(subDescription);
        formAds.appendChild(boxLink);
        formAds.appendChild(pointContainer);
        formAds.appendChild(boxAdsAddSave);
        boxPublishDeleteAdsContainer.appendChild(publishAdsButton);
        boxPublishDeleteAdsContainer.appendChild(deleteAdsButton);

        // base 4
        adsDetailBox.appendChild(formAds);
        adsDetailBox.appendChild(border);
        adsDetailBox.appendChild(boxPublishDeleteAdsContainer);
        headerBoxAds.appendChild(titleAds);
        headerBoxAds.appendChild(toggleIcon);


        // base 5
        boxAds.appendChild(headerBoxAds);
        boxAds.appendChild(adsDetailBox);

        // base 6

        ads_container.appendChild(boxAds);


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
