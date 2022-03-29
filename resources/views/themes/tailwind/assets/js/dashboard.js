window.createAdCopy = async function(){
    let url = "https://api.openai.com/v1/engines/text-davinci-002/completions";
    let requestBody = JSON.stringify({
                                "prompt": "Write a creative ad for the following product to run on Facebook aimed at parents:\n\nProduct: Learning Room is a virtual environment to help students from kindergarten to high school excel in school.", 
                                "temperature": 0.5,
                                "max_tokens": 60,
                                "top_p": 1.0,
                                "frequency_penalty": 0.0,
                                "presence_penalty": 0.0
                            });
    console.log(requestBody);
	var rawResponse = await fetch(url, {
                            method: 'POST',
                            headers: {
                            "Authorization": 'Basic '+ btoa(':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'),
                            "Content-type": "application/json"
                            },
                            body: requestBody
                        });
                        // .then(json)
                        // .then(function (data) {
                        //     console.log('Request succeeded with JSON response', data);
                        // })
                        // .catch(function (error) {
                        //     console.log('Request failed', error);
                        // });
    const content = await rawResponse.json();
    console.log(content);
};