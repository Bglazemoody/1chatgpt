function showBuyForm() {
    document.getElementById('form').classList.toggle('hidden');
    document.getElementById('moreInfo').classList.add('hidden');
}

function showMoreInfo() {
    document.getElementById('moreInfo').classList.toggle('hidden');
    document.getElementById('form').classList.add('hidden');
}
