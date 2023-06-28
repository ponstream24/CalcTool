//class arrowを収集
var arrow = document.querySelectorAll(".arrow")

//コンテンツ数繰り返す
for (let i = 0; i < arrow.length; i++) {

    //arrow[i]を見張る
    arrow[i].addEventListener("click", (e) => {

        //arrow[i]のコードを取得
        var arrowParnt = e.target.parentElement.parentElement

        //クラス showMenuを追加 & 剥奪
        arrowParnt.classList.toggle("showMenu")
    })
}

//サイドバーのコードを取得
var sidebar = document.querySelector(".sidebar")
var sidebarBtn = document.querySelector(".bx-menu")

//３本線を見張る
sidebarBtn.addEventListener("click", () => {
    sidebar.classList.toggle("close")
})

//ロゴ取得
var sidebarLogo = document.querySelector(".logo-details")

//ロゴを見張る
sidebarLogo.addEventListener("click", () => {
    sidebar.classList.toggle("close")
})

//プロフィール画像取得
var profile_ico = document.querySelector(".profile-content")

//プロフィール画像を見張る
profile_ico.addEventListener("click", () => {

    //もし、サイドバーにcloseが含まれていたら
    if (sidebar.className.includes("close")) {

        sidebar.classList.toggle("close")

    }
})

//左上のタイトル
var sidebarLogo = document.querySelector(".text")

//左上のタイトルを見張る
sidebarLogo.addEventListener("click", () => {
    sidebar.classList.toggle("close")
})