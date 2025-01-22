/* Reset Default Browser Styles */
body, html {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

/* Layout Wrapper */
.layout {
    display: flex;
    height: 100vh;
    overflow: hidden;
}

/* Sidebar */
.sidebar {
    width: 250px;
    background-color: #1e293b;
    color: #fff;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 20px 10px;
}

.sidebar .logo {
    font-size: 1.5em;
    font-weight: bold;
    margin-bottom: 20px;
}

.sidebar .nav ul {
    list-style: none;
    padding: 0;
    width: 100%;
}

.sidebar .nav ul li {
    margin: 15px 0;
}

.sidebar .nav ul li a {
    text-decoration: none;
    color: #fff;
    font-size: 1em;
    padding: 10px;
    border-radius: 5px;
    display: flex;
    align-items: center;
    gap: 10px;
    transition: background 0.3s ease;
}

.sidebar .nav ul li a:hover {
    background-color: #334155;
}

/* Konten Utama */
.content {
    flex: 1;
    background-color: #f8fafc;
    display: flex;
    flex-direction: column;
    padding: 20px;
    overflow-y: auto;
}

.content-header {
    margin-bottom: 20px;
}

.content-body {
    font-size: 1.1em;
}

/* Responsivitas */
@media (max-width: 768px) {
    .layout {
        flex-direction: column;
    }

    .sidebar {
        width: 100%;
        height: auto;
    }

    .content {
        margin-top: 0;
    }
}
