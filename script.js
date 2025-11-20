// assets/js/script.js

// Mobile menu
document.getElementById('mobile-menu-button').addEventListener('click', function() {
    const menu = document.getElementById('mobile-menu');
    if (menu.classList.contains('hidden')) {
        menu.classList.remove('hidden');
    } else {
        menu.classList.add('hidden');
    }
});

function showRegistrationForm(eventName) {
    document.getElementById('modal-title').textContent = `Form Pendaftaran - ${eventName}`;
    document.getElementById('eventName').value = eventName;
    document.getElementById('registration-modal').classList.remove('hidden');
}

function closeModal() {
    document.getElementById('registration-modal').classList.add('hidden');
}

function showActivityDetails(activity) {
    const activities = {
        'Bersih-bersih Pantai Ancol': {
            image: 'https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/9f009773-e26d-4c1b-a40e-4fac56d80e7d.png',
            date: 'Sabtu-Minggu, 20-21 Mei 2023',
            location: 'Pantai Ancol, Jakarta Utara',
            description: 'Kegiatan bersih pantai untuk membersihkan sampah plastik yang mencemari ekosistem laut. Acara ini akan diikuti oleh 100+ relawan dengan fasilitas yang disediakan termasuk sarung tangan, kantong sampah, dan alat pengumpul sampah.'
        },
        'Workshop Daur Ulang Sampah Plastik': {
            image: 'https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/c87df4ae-5d11-437c-a1ea-16e59ae1494a.png',
            date: 'Setiap Sabtu',
            location: 'Online via Zoom',
            description: 'Workshop interaktif yang mengajarkan teknik dasar daur ulang sampah plastik menjadi barang bernilai. Peserta akan belajar membuat tas belanja, pot tanaman, dan kerajinan lainnya dari bahan bekas.'
        },
        'Gerakan Jakarta Hijau: Tanam 1000 Pohon': {
            image: 'https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/546465dd-0d93-4a2e-8f48-a89705902e4c.png',
            date: 'Minggu, 5 Juni 2023',
            location: '5 Lokasi di Jakarta',
            description: 'Aksi penanaman pohon produktif di 5 titik vital Jakarta untuk meningkatkan kualitas udara dan resapan air.'
        }
    };

    const data = activities[activity];
    if (data) {
        document.getElementById('activity-title').textContent = `Detail Kegiatan - ${activity}`;
        document.getElementById('activity-image').src = data.image;
        document.getElementById('activity-date').textContent = data.date;
        document.getElementById('activity-location').textContent = data.location;
        document.getElementById('activity-description').textContent = data.description;
        document.getElementById('activity-modal').classList.remove('hidden');
    }
}

function closeActivityModal() {
    document.getElementById('activity-modal').classList.add('hidden');
}

// Auth modal
function showAuthModal(tab) {
    document.getElementById('auth-modal').classList.remove('hidden');
    if (tab === 'login') {
        document.getElementById('login-form').classList.remove('hidden');
        document.getElementById('signup-form').classList.add('hidden');
        document.getElementById('login-tab').classList.add('border-green-600', 'text-green-600');
        document.getElementById('login-tab').classList.remove('border-transparent', 'text-gray-500');
        document.getElementById('signup-tab').classList.remove('border-green-600', 'text-green-600');
        document.getElementById('signup-tab').classList.add('border-transparent', 'text-gray-500');
    } else {
        document.getElementById('login-form').classList.add('hidden');
        document.getElementById('signup-form').classList.remove('hidden');
        document.getElementById('signup-tab').classList.add('border-green-600', 'text-green-600');
        document.getElementById('signup-tab').classList.remove('border-transparent', 'text-gray-500');
        document.getElementById('login-tab').classList.remove('border-green-600', 'text-green-600');
        document.getElementById('login-tab').classList.add('border-transparent', 'text-gray-500');
    }
}

function closeAuthModal() {
    document.getElementById('auth-modal').classList.add('hidden');
}

// Tab switching
document.getElementById('login-tab').addEventListener('click', function() {
    showAuthModal('login');
});

document.getElementById('signup-tab').addEventListener('click', function() {
    showAuthModal('signup');
});

// --- AJAX: login / signup using php endpoints ---
// Login
document.getElementById("login-form").addEventListener("submit", function (e) {
    e.preventDefault();
    const email = document.getElementById("login-email").value.trim();
    const password = document.getElementById("login-password").value.trim();

    if (!email || !password) {
        alert("Email dan password harus diisi.");
        return;
    }

    fetch('php/login.php', {
        method: 'POST',
        headers: { 'Content-Type':'application/json' },
        body: JSON.stringify({ email, password })
    })
    .then(r => r.json())
    .then(res => {
        if (res.success) {
            alert('Login berhasil!');
            location.reload();
        } else {
            alert('Login gagal: ' + res.message);
        }
    })
    .catch(err => {
        console.error(err);
        alert('Terjadi kesalahan.');
    });
});

// Signup
document.getElementById("signup-form").addEventListener("submit", function (e) {
    e.preventDefault();
    const email = document.getElementById("signup-email").value.trim();
    const password = document.getElementById("signup-password").value.trim();

    if (!email || !password) {
        alert("Email dan password harus diisi.");
        return;
    }

    if (password.length < 6) {
        alert("Password minimal 6 karakter.");
        return;
    }

    fetch('php/signup.php', {
        method: 'POST',
        headers: { 'Content-Type':'application/json' },
        body: JSON.stringify({ email, password })
    })
    .then(r => r.json())
    .then(res => {
        if (res.success) {
            alert('Pendaftaran berhasil! Silakan login.');
            showAuthModal('login');
        } else {
            alert('Pendaftaran gagal: ' + res.message);
        }
    })
    .catch(err => {
        console.error(err);
        alert('Terjadi kesalahan.');
    });
});

// Registration form submit (daftar kegiatan)
document.getElementById('registration-form').addEventListener('submit', function(e){
    e.preventDefault();
    const data = {
        name: document.getElementById('name').value.trim(),
        email: document.getElementById('emailReg').value.trim(),
        phone: document.getElementById('phone').value.trim(),
        address: document.getElementById('address').value.trim(),
        eventName: document.getElementById('eventName').value
    };
    fetch('php/registration_submit.php', {
        method: 'POST',
        headers: { 'Content-Type':'application/json' },
        body: JSON.stringify(data)
    })
    .then(r => r.json())
    .then(res => {
        if (res.success) {
            alert('Pendaftaran berhasil!');
            closeModal();
        } else {
            alert('Pendaftaran gagal: ' + res.message);
        }
    })
    .catch(err => {
        console.error(err);
        alert('Terjadi kesalahan.');
    });
});

// Newsletter subscribe
document.getElementById('newsletter-form').addEventListener('submit', function(e){
    e.preventDefault();
    const email = document.getElementById('newsletter-email').value.trim();
    if (!email) { alert('Masukkan email'); return; }
    fetch('php/newsletter.php', {
        method: 'POST',
        headers: { 'Content-Type':'application/json' },
        body: JSON.stringify({ email })
    })
    .then(r => r.json())
    .then(res => {
        if (res.success) {
            alert('Terima kasih! Anda berhasil berlangganan.');
            document.getElementById('newsletter-email').value = '';
        } else {
            alert('Gagal: ' + res.message);
        }
    })
    .catch(err => {
        console.error(err);
        alert('Terjadi kesalahan.');
    });
});
