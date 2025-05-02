import axios from "axios";

export const getDownloadApi = () => {
    const buttonDownload = document.getElementById('download-btn');
    const downloadTab = document.getElementById('download-tab');
    const form = document.getElementById('download-form');
    const url = document.getElementById('url-input');

    form.addEventListener('submit', async (e) => {
        e.preventDefault();

        if (!url.value && url.value.trim() === '') {
            return;
        }

        downloadTab.classList.remove('hidden');

        try {
            const { data } = await axios.get('/api/download-api', {
                params: { url: url.value }
            });

            document.getElementById('status').textContent = `✅ Status: ${data.status}`;
            document.getElementById('url-download').textContent = `🔗 URL Download: ${data.url_download}`;
            document.getElementById('name-acc').textContent = `👤 User Acc: ${data.name_account}`;
        } catch (error) {
            document.getElementById('status').textContent = `❌ Error: ${error.message}`;
        }
    });

    document.getElementById('reset-btn').addEventListener('click', () => {
        document.getElementById('download-tab').classList.add('hidden');
        document.getElementById('status').textContent = '🔄 Status: Loading...';
        document.getElementById('url-download').textContent = '🌐 URL Download: Loading...';
        document.getElementById('name-acc').textContent = '👤 User Acc: Loading...';
    });
    
}

