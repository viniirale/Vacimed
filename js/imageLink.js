function medicamentoLink(img) {
    window.location.href = "medicamentos.php";
}
function farmaciaLink(img) {
    window.location.href = "farmacia.php";
}

function ouvidoriaLink() {
    window.open('https://sistema.ouvidorias.gov.br/publico/Manifestacao/SelecionarTipoManifestacao.aspx', '_blank');
    win.focus();
}

function showFarmacia() {
    document.getElementById("showFarmacias").hidden = false;
}

function showMedicamento() {
    document.getElementById("showMedicamentos").hidden = false;
}

function btnComprar() {
    window.open('https://www.rappi.com.br/product/900023979_2093908012', '_blank');
    win.focus();
}