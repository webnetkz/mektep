<div class="menuTabs">
    <button class="tabBtn activeTab" name="1" onclick="focusTab(this)">1 tab</button>
    <button class="tabBtn" name="2" onclick="focusTab(this)">2 tab</button>
    <button class="tabBtn" name="3" onclick="focusTab(this)">3 tab</button>
    <button class="tabBtn" name="4" onclick="focusTab(this)">4 tab</button>
    <button class="tabBtn" name="5" onclick="focusTab(this)">5 tab</button>
</div>
<div class="content">
    <div class="tabContent1 tabContent showContent">tabContent1</div>
    <div class="tabContent2 tabContent">tabContent2</div>
    <div class="tabContent3 tabContent">tabContent3</div>
    <div class="tabContent4 tabContent">tabContent4</div>
    <div class="tabContent5 tabContent">tabContent5</div>
</div>

<style>
    .content {
        position: relative;
        top: 110px;
        left: 0;
        height: calc(100vh - 110px);
        width: 100vw;
    }
    .tabContent {
        display: none;
    }
    .menuTabs {
        display: flex;
        align-items: center;
        position: relative;
        top: 0;
        left: 0;
        height: 100px;
        width: 100vw;
        background: rgb(90, 110, 28);
    }
    .tabBtn {
        outline: none;
    }
    .activeTab {
        transition-duration: 650ms;
        border: 2px solid blue;
    }
    .showContent {
        display: block;
        transition-duration: 500ms;
    }
</style>
<script>
    // Tabs
    function focusTab(elem) {

        // Находим активную вкладку и дизактивируем
        let activeTab = document.querySelector('.activeTab');
        if(activeTab) {
            activeTab.classList.remove('activeTab');
        }

        // Активируем вкладку при клике
        if(elem.classList.value != 'activeTab') {
            elem.classList.add('activeTab');
        }

        // Находим отображаемый контент и скрываем
        let tabAllContent = document.querySelector('.showContent');
        if(tabAllContent) {
            tabAllContent.classList.remove('showContent');
        }

        // Отображаем контент активной вкладки
        let tabContent = document.querySelector('.tabContent'+elem.name);
        tabContent.classList.add('showContent');
    }
</script>