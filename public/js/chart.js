
window.onload = function () {
    // Chart 1: Distribusi Penduduk Berdasarkan Usia
    var chart1 = new CanvasJS.Chart("chartUsia", {
        animationEnabled: true,
        theme: "light2",
        title: {
            text: "Distribusi Penduduk Berdasarkan Usia"
        },
        axisY: {
            title: "Jumlah Penduduk",
            includeZero: true
        },
        axisX: {
            title: "Kelompok Usia"
        },
        data: [{
            type: "column",
            showInLegend: true,
            legendMarkerColor: "grey",
            legendText: "Kelompok Usia",
            dataPoints: [
                { y: 356, label: "0-5 Tahun", color: "#2E7D32" },
                { y: 428, label: "6-12 Tahun", color: "#43A047" },
                { y: 512, label: "13-18 Tahun", color: "#66BB6A" },
                { y: 683, label: "19-30 Tahun", color: "#81C784" },
                { y: 794, label: "31-45 Tahun", color: "#A5D6A7" },
                { y: 362, label: "46-60 Tahun", color: "#C8E6C9" },
                { y: 115, label: ">60 Tahun", color: "#E8F5E9" }
            ]
        }]
    });
    chart1.render();

    // Chart 2: Distribusi Penduduk Berdasarkan Pendidikan
    var chart2 = new CanvasJS.Chart("chartPendidikan", {
        animationEnabled: true,
        theme: "light2",
        title: {
            text: "Distribusi Penduduk Berdasarkan Pendidikan"
        },
        axisY: {
            title: "Jumlah Penduduk",
            includeZero: true
        },
        data: [{
            type: "column",
            showInLegend: true,
            legendMarkerColor: "grey",
            legendText: "Tingkat Pendidikan",
            dataPoints: [
                { y: 487, label: "Tidak Sekolah", color: "#1565C0" },
                { y: 752, label: "SD/Sederajat", color: "#1976D2" },
                { y: 843, label: "SMP/Sederajat", color: "#1E88E5" },
                { y: 789, label: "SMA/Sederajat", color: "#42A5F5" },
                { y: 264, label: "Diploma", color: "#64B5F6" },
                { y: 115, label: "S1/S2/S3", color: "#90CAF9" }
            ]
        }]
    });
    chart2.render();

    // Chart 3: Distribusi Penduduk Berdasarkan Pekerjaan
    var chart3 = new CanvasJS.Chart("chartPekerjaan", {
        animationEnabled: true,
        theme: "light2",
        title: {
            text: "Distribusi Penduduk Berdasarkan Pekerjaan"
        },
        axisY: {
            title: "Jumlah Penduduk",
            includeZero: true
        },
        data: [{
            type: "column",
            showInLegend: true,
            legendMarkerColor: "grey",
            legendText: "Jenis Pekerjaan",
            dataPoints: [
                { y: 1250, label: "Petani", color: "#BF360C" },
                { y: 728, label: "Pedagang", color: "#D84315" },
                { y: 325, label: "PNS", color: "#E64A19" },
                { y: 276, label: "Swasta", color: "#F4511E" },
                { y: 143, label: "Wiraswasta", color: "#FF5722" },
                { y: 98, label: "TNI/Polri", color: "#FF7043" },
                { y: 430, label: "Lainnya", color: "#FF8A65" }
            ]
        }]
    });
    chart3.render();
}
