<!-- resources/views/components/meeting-form.blade.php -->
<section class="py-20 bg-blue-600 rounded-t-[3rem] text-white" aria-labelledby="meeting-form-heading">
    <div class="max-w-4xl mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-extrabold mb-4">{{$title}}</h2>
        <p class="text-blue-100 mb-10 text-lg"> {{$subtitle}} </p>

        <div class="bg-white p-8 rounded-3xl shadow-2xl text-slate-900 text-left">
            <div id="meetingForm" class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <div class="col-span-1">
                    <label for="company" class="block text-sm font-bold mb-2">
                        Nama Perusahaan <span class="text-red-500" aria-label="wajib diisi">*</span>
                    </label>
                    <input type="text" id="company" name="company" placeholder="Contoh: PT. Maju Jaya"
                        autocomplete="organization" required
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 outline-none text-sm">
                </div>

                <div class="col-span-1">
                    <label for="phone" class="block text-sm font-bold mb-2">
                        Nomor WhatsApp PIC <span class="text-red-500" aria-label="wajib diisi">*</span>
                    </label>
                    <input type="tel" id="phone" name="phone" placeholder="0812xxxx" autocomplete="tel" required
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 outline-none text-sm">
                </div>

                <div class="col-span-2">
                    <label for="meetingDate" class="block text-sm font-bold mb-2">
                        Rencana Tanggal Meeting <span class="text-red-500" aria-label="wajib diisi">*</span>
                    </label>
                    <input type="date" id="meetingDate" name="meetingDate" required
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 outline-none text-sm text-slate-500">
                </div>

                <div class="col-span-2">
                    <label for="needs" class="block text-sm font-bold mb-2">Deskripsi Kebutuhan (Opsional)</label>
                    <textarea id="needs" name="needs" rows="3"
                        placeholder="Ceritakan singkat kebutuhan website yang ingin Anda buat..."
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 outline-none text-sm resize-none"></textarea>
                </div>

                <div class="col-span-2">
                    <button type="button" onclick="handleMeetingForm()"
                        class="w-full py-4 bg-emerald-500 hover:bg-emerald-600 text-white font-bold rounded-xl transition-all shadow-lg shadow-emerald-200 flex items-center justify-center gap-2 cursor-pointer">
                        <i class="fa-brands fa-whatsapp text-xl" aria-hidden="true"></i>
                        Kirim Permintaan Meeting
                    </button>
                </div>

            </div>
        </div>
    </div>
</section>

<script>
function handleMeetingForm() {
    const company = document.getElementById('company').value.trim();
    const phone = document.getElementById('phone').value.trim();
    const date = document.getElementById('meetingDate').value;
    const needs = document.getElementById('needs').value.trim() || 'Tidak ada deskripsi';

    if (!company || !phone || !date) {
        alert('Mohon lengkapi field yang wajib diisi.');
        return;
    }

    const number = '6285865405330';
    const message = 'Halo Admin, saya ingin *Minta Meeting*:%0A%0A' +
        '*Nama Perusahaan:* ' + encodeURIComponent(company) + '%0A' +
        '*No. WhatsApp PIC:* ' + encodeURIComponent(phone) + '%0A' +
        '*Rencana Tanggal:* ' + encodeURIComponent(date) + '%0A' +
        '*Deskripsi Kebutuhan:* ' + encodeURIComponent(needs);

    window.open('https://wa.me/' + number + '?text=' + message, '_blank');
}
</script>