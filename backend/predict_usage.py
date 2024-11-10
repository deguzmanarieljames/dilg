# import sys
# import json
# import pandas as pd
# from statsmodels.tsa.arima.model import ARIMA

# def predict_usage(data):
#     # Load data and prepare time series
#     df = pd.DataFrame(data)
#     df['month'] = pd.to_datetime(df['month'])
#     df.set_index('month', inplace=True)
#     df = df.asfreq('MS')
    
#     # Fit ARIMA model
#     model = ARIMA(df['total_issued'], order=(1, 1, 1))  # Simple ARIMA model
#     model_fit = model.fit()
    
#     # Forecast for the next 3 months
#     forecast = model_fit.forecast(steps=3)
#     forecast_dates = pd.date_range(df.index[-1] + pd.offsets.MonthBegin(1), periods=3, freq='MS')
    
#     # Convert forecast to JSON format
#     predictions = [{"month": date.strftime("%Y-%m"), "predicted_issue": value} for date, value in zip(forecast_dates, forecast)]
#     return json.dumps(predictions)

# if __name__ == "__main__":
#     # Get input data from command line
#     input_data = json.loads(sys.argv[1])
#     print(predict_usage(input_data))


# import sys
# import json
# import pandas as pd
# from statsmodels.tsa.arima.model import ARIMA

# def predict_usage(data):
#     # Load data and prepare time series
#     df = pd.DataFrame(data)
#     df['month'] = pd.to_datetime(df['month'])
#     df.set_index('month', inplace=True)
#     df = df.asfreq('MS')
    
#     # Fit ARIMA model
#     model = ARIMA(df['total_issued'], order=(1, 1, 1))  # Simple ARIMA model
#     model_fit = model.fit()
    
#     # Forecast for the next 3 months
#     forecast = model_fit.forecast(steps=3)
#     forecast_dates = pd.date_range(df.index[-1] + pd.offsets.MonthBegin(1), periods=3, freq='MS')
    
#     # Convert forecast to JSON format
#     predictions = [{"month": date.strftime("%Y-%m"), "predicted_issue": value} for date, value in zip(forecast_dates, forecast)]
#     return json.dumps(predictions)

# if __name__ == "__main__":
#     try:
#         # Print the input data received
#         print("Input data:", sys.argv[1])
#         # Attempt to parse the JSON
#         input_data = json.loads(sys.argv[1])
#         print("Parsed JSON:", input_data)
#     except json.JSONDecodeError as e:
#         print(json.dumps({"error": "JSONDecodeError", "message": str(e)}))
#     except Exception as e:
#         print(json.dumps({"error": "Exception", "message": str(e)}))
        

import sys
import json
import pandas as pd
from statsmodels.tsa.arima.model import ARIMA

def predict_usage(data):
    # Load data and prepare time series
    df = pd.DataFrame(data)
    df['month'] = pd.to_datetime(df['month'])
    df.set_index('month', inplace=True)
    df = df.asfreq('MS')
    
    # Fit a simplified ARIMA model for small dataset
    model = ARIMA(df['total_issued'], order=(1, 1, 0))
    model_fit = model.fit()
    
    # Forecast for the next 3 months
    try:
        forecast = model_fit.forecast(steps=3)
        
        # Check if forecast is a single value (0-dimensional)
        if isinstance(forecast, float) or forecast.ndim == 0:
            forecast = [forecast] * 3  # Repeat the forecasted value for 3 months
    except Exception as e:
        return json.dumps({"error": "ForecastError", "message": str(e)})
    
    # Generate dates for the forecast
    forecast_dates = pd.date_range(df.index[-1] + pd.offsets.MonthBegin(1), periods=3, freq='MS')
    
    # Convert forecast to JSON format
    predictions = [{"month": date.strftime("%Y-%m"), "predicted_issue": float(value)} for date, value in zip(forecast_dates, forecast)]
    return json.dumps(predictions)

if __name__ == "__main__":
    try:
        # Print the input data received
        print("Input data:", sys.argv[1])
        
        # Attempt to parse the JSON
        input_data = json.loads(sys.argv[1])
        print("Parsed JSON:", input_data)
        
        # Call predict_usage and print the predictions
        predictions = predict_usage(input_data)
        print("Predicted Usage:", predictions)

    except json.JSONDecodeError as e:
        print(json.dumps({"error": "JSONDecodeError", "message": str(e)}))
    except Exception as e:
        print(json.dumps({"error": "Exception", "message": str(e)}))

