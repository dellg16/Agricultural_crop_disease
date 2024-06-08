const updateStatus = async (id) => {
    try {
        const response = await fetch("approval.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify({ updateId: id })
        });

        if (!response.ok) {
            throw new Error("Network response was not ok.");
        }

        const data = await response.text();

        if (data == 1) {
            $(`#statusBtn${id}`).text("Disapprove");
        } else if (data == 0) {
            $(`#statusBtn${id}`).text("Approve");
        }

        // Toggle button class
        $(`#statusBtn${id}`).toggleClass("approve disapprove");
    } catch (error) {
        console.error("Error:", error);
    }
};
