<style>
    .loading {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        background: rgba(255, 255, 255, 0.8);
        z-index: 9999999999999999999999999999;
    }
    .loadElement {
        position: fixed;
        top: calc(50% - 50px);
        left: calc(50% - 50px);
        width: 100px;
        height: 100px;
        border-radius: 50%;
        border: 5px solid rgb(12, 77, 162);
        box-sizing: border-box;
        transition-duration: 500ms;
        animation: pulse 1s infinite;
        z-index: 99999999999999999999999999999;
    }
    @keyframes pulse {
        50% {
            transform: scale(1.5);
        }
    }
</style>
<div class="loading">
    <div class="loadElement"></div>
</div>