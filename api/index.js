export const config = {
    runtime: "edge",
};

export default async function handler(request) {
    const url = new URL(request.url);
    const path = url.pathname;

    // Redirect to your actual Laravel app (misalnya jika kamu host di platform lain)
    // Atau tampilkan halaman statis dari direktori public

    // Contoh redirect ke Heroku (jika kamu memutuskan untuk hosting Laravel di sana)
    // return Response.redirect('https://your-app-name.herokuapp.com' + path);

    // Atau tampilkan halaman statis jika tersedia
    try {
        const response = await fetch(
            `https://raw.githubusercontent.com/AlphaIsYour/velenoporto/master/public${
                path === "/" ? "/index.html" : path
            }`
        );
        if (response.ok) {
            const content = await response.text();
            return new Response(content, {
                headers: { "Content-Type": getContentType(path) },
            });
        }
    } catch (error) {
        console.error(error);
    }

    // Fallback ke halaman index.html
    return new Response("Aplikasi Portfolio velenoporto", {
        headers: { "Content-Type": "text/html" },
    });
}

function getContentType(path) {
    if (path.endsWith(".html")) return "text/html";
    if (path.endsWith(".css")) return "text/css";
    if (path.endsWith(".js")) return "text/javascript";
    if (path.endsWith(".json")) return "application/json";
    if (path.endsWith(".png")) return "image/png";
    if (path.endsWith(".jpg") || path.endsWith(".jpeg")) return "image/jpeg";
    if (path.endsWith(".svg")) return "image/svg+xml";
    return "text/plain";
}
