import fetch from 'node-fetch';

async function getStatusCodeAndJson(url: string): Promise<string> {
    try {
        const response = await fetch(url);
        const statusCode = response.status;

        // Fetch the content if the status code is 200
        let jsonData = null;
        if (statusCode === 200) {
            const data = await response.text();
            const matches = data.match(/<!--\s*({.*})\s*-->/);
            if (matches) {
                jsonData = JSON.parse(matches[1]);
            }
        }

        // Create the JSON object to return
        const result = {
            status_code: statusCode,
            data: jsonData
        };

        return JSON.stringify(result);
    } catch (error) {
        const result = {
            status_code: `Error: ${error.message}`,
            data: null
        };

        return JSON.stringify(result);
    }
}

// Get the URL from command line arguments
const url = process.argv[2];
if (!url) {
    console.error("Usage: node script.js <URL>");
    process.exit(1);
}

getStatusCodeAndJson(url).then((result) => {
    console.log(result);
});
