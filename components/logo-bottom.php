<style>
.logo-bottom-fixed {
    position: fixed;
    right: 32px;
    bottom: 32px;
    z-index: 999;
    background: rgba(255,255,255,0.95);
    border-radius: 24px;
    box-shadow: 0 4px 24px rgba(0,0,0,0.10);
    display: flex;
    align-items: center;
    transition: box-shadow 0.2s;

    padding: 8px 10px;
    gap: 5px;
}
.logo-bottom-fixed:hover {
    box-shadow: 0 8px 32px rgba(0,0,0,0.18);
}
.logo-bottom-fixed .logo {
    background: #fff;
    border-radius: 12px;
    padding: 8px;
    max-width: 80px;
    max-height: 60px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.06);
    transition: transform 0.2s;
}
.logo-bottom-fixed .logo:hover {
    transform: scale(1.08);
}
@media (max-width: 640px) {
    .logo-bottom-fixed {
        right: 8px;
        bottom: 8px;
        padding: 8px 8px;
        gap: 12px;
    }
    .logo-bottom-fixed .logo {
        max-width: 48px;
        max-height: 36px;
        padding: 4px;
    }
}
</style>
<div class="logo-bottom-fixed">
    <img src="https://portal.migunesia.com/storage/anu-anu-builder/event-2352/2352-gallery-685a6149cb366.png" alt="Logo 1" class="logo">
    <img src="https://portal.migunesia.com/storage/anu-anu-builder/event-2352/2352-gallery-685a61219745e.png" alt="Logo 2" class="logo">
    <img src="https://portal.migunesia.com/storage/anu-anu-builder/event-2352/2352-gallery-685a6134a20bc.png" alt="Logo 3" class="logo">
</div>
