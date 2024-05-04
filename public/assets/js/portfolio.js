const project = [
    {
        nama: "Laravel Pengaduan App",
        img: "./assets/img/portfolio/pengaduan.PNG",
        link: "http://pengaduan.novimovie.xyz/",
        github:"https://github.com/NoviHe/CiganjengDamai-pengaduan-app"
    },
    {
        nama: "Kotlin CEXCANGER App",
        img: "./assets/img/portfolio/android-kotlin_11zon.png",
        link: "#",
        github:"#"
    },
    {
        nama: "Laravel Sistem Informasi Data Asset",
        img: "./assets/img/portfolio/laravel-sida.PNG",
        link: "#",
        github:"#"
    },
    {
        nama: "PHP Lelang Ikan (Dataminer Algoritma Apriori)",
        img: "./assets/img/portfolio/lelang_11zon.png",
        link: "http://lelang-ikan.novimovie.xyz/",
        github:"#"
    },
    {
        nama: "PHP Penggajian App",
        img: "./assets/img/portfolio/penggajian.PNG",
        link: "http://penggajian.novimovie.xyz/",
        github:"#"
    },
    {
        nama: "IoT Smart Home Project",
        img: "./assets/img/portfolio/smarthome.jpg",
        link: "#",
        github:"#"
    },
    {
        nama: "Laravel Sistem Pembuat Keputusan (SPK) App",
        img: "./assets/img/portfolio/spk.PNG",
        link: "#",
        github:"#"
    },
    {
        nama: "Develop Project T-Hypestor",
        img: "./assets/img/portfolio/t-store.jpg",
        link: "#",
        github:"#"
    },
    {
        nama: "Kotlin Github User App",
        img: "./assets/img/portfolio/github-user.png",
        link: "#",
        github:"https://github.com/NoviHe/githubUserApp_kotlin"
    },
    {
        nama: "Develop Project TBL-Cargo",
        img: "./assets/img/portfolio/tbl.png",
        link: "#",
        github:"#"
    }
];
project.forEach((i) => {
    $('#portfolio-items').append(`
    <li>
        <div class="card mb-4 ">
            <div class="card-body text-center">
                <img src="${i.img}" class="w-100 img-thumbnail" alt="portfolio">
                <h3 class="text-capitalize fs-5 my-2">${i.nama}</h3>
                <div class="row">
                    <div class="col-md-12">
                        <a href="${i.link}" class="btn btn-outline-primary" target="_blank">Demo <i class="fa fa-arrow-right"></i></a>
                        
                        <a href="${i.github}" class="btn btn-outline-dark" target="_blank">GitHub <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </li>
    `);
} )