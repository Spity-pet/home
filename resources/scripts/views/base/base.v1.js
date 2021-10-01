import { StorendController } from "https://cdn.storend.com.co/storend/modules/storend/scripts.min.js";
const View = {
    init: () => {
        StorendController.init();
        StatusHandler.init("12")
    }
};
document.addEventListener("DOMContentLoaded", View.init)