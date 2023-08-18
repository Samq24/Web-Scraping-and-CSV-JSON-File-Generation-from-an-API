# Web-Scraping-and-CSV-JSON-File-Generation-from-an-API


**Description**:

This project involves an automation script developed in PHP that performs web scraping to retrieve data from an API providing information in JSON format. Extracted data is stored in both a JSON file and a CSV file. This enables easy data manipulation, analysis, and storage for future use. Below is a detailed outline of the script's workflow:

1. **Inclusion of Required Libraries**: The script utilizes the `League\Csv` library to handle CSV files. Dependency management is handled through Composer, ensuring an efficient and organized workflow.

2. **API Data Retrieval**: Using the `file_get_contents` function, the script accesses a URL that supplies data in JSON format. This URL could represent a company's API, an online service, or any resource offering structured data.

3. **JSON File Storage**: The obtained JSON content is stored in a file named 'data-YYYY-MM-DD.json' using the `file_put_contents` function. This maintains a record of downloaded data directly in the filesystem.

4. **Data Processing and Encoding**: JSON data is decoded using `json_decode`, transforming it into an associative array for easy handling. Subsequently, the data is re-encoded in JSON format using `json_encode`, preparing it for storage once again in 'data-YYYY-MM-DD.json'.

5. **CSV File Generation**: The script obtains the current date in the 'YYYY-MM-DD' format and generates a unique CSV file name ('data-YYYY-MM-DD.csv'). The `League\Csv` library is used to create and manage the CSV file.

6. **Writing Data to CSV File**: Both headers and retrieved data are written to the CSV file using the `insertOne` function. This creates a well-structured CSV file that mirrors the data obtained from the API.

7. **Success Message**: Once JSON and CSV files have been generated, the script prints a success message, indicating that the operation has been completed successfully.

**Utilized Technologies**:

- PHP
- Composer (for dependency management)
- `League\Csv` Library (for CSV file handling)

**Application**:

This project showcases the ability to automate the process of data extraction from an API, storing it in structured and usable formats, and facilitating subsequent analysis. It serves as a foundation for web scraping tasks, data processing, and automated report generation. The code's structure and logic make it a valuable addition to any web development and automation portfolio.
