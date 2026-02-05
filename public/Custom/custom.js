<script>
    // Variable Element
    const inputTinggi = document.getElementById('tinggi_badan');
    const inputBerat = document.getElementById('berat_badan');
    const scoreEl = document.getElementById('bmi-score');
    const statusEl = document.getElementById('bmi-status');
    const cardEl = document.getElementById('bmi-card');
    const genderInput = document.getElementById('gender_pegawai');
    const genderIcon = document.getElementById('gender-icon');

    // Event Listener saat mengetik
    inputTinggi.addEventListener('input', calculateBMI);
    inputBerat.addEventListener('input', calculateBMI);

    function calculateBMI() {
        let tb = parseFloat(inputTinggi.value) / 100; // cm ke meter
        let bb = parseFloat(inputBerat.value);

        if (tb &gt; 0 && bb &gt; 0) {
            let bmi = bb / (tb * tb);
            let score = bmi.toFixed(1);
            scoreEl.innerText = score;

            updateUI(bmi);
        } else {
            resetUI();
        }
    }

    function updateUI(bmi) {
        let status = '';
        let colorClass = '';
        let bgStyle = '';

        if (bmi < 18.5) {
            status = 'KURUS';
            colorClass = 'badge-warning';
            bgStyle = '#fff3cd'; // Kuning muda
        } else if (bmi >= 18.5 && bmi <= 25) {
            status = 'IDEAL';
            colorClass = 'badge-success';
            bgStyle = '#d4edda'; // Hijau muda
        } else if (bmi > 25 && bmi <= 29.9) {
            status = 'GEMUK';
            colorClass = 'badge-warning';
            bgStyle = '#fff3cd';
        } else {
            status = 'OBESITAS';
            colorClass = 'badge-danger';
            bgStyle = '#f8d7da'; // Merah muda
        }

        // Reset class lama
        statusEl.className = `badge px-4 py-2 ${colorClass}`;
        statusEl.style.borderRadius = '50px';
        statusEl.innerText = status;

        // Ubah background card
        cardEl.style.backgroundColor = bgStyle;
        cardEl.style.transition = "background-color 0.5s ease";
    }

    function resetUI() {
        scoreEl.innerText = '--.--';
        statusEl.innerText = 'Menunggu Input...';
        statusEl.className = 'badge badge-secondary px-4 py-2';
        cardEl.style.backgroundColor = '#f8f9fa';
    }
</script>
