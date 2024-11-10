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
    
    # Fit ARIMA model
    model = ARIMA(df['total_issued'], order=(1, 1, 1))  # Simple ARIMA model
    model_fit = model.fit()
    
    # Forecast for the next 3 months
    forecast = model_fit.forecast(steps=3)
    forecast_dates = pd.date_range(df.index[-1] + pd.offsets.MonthBegin(1), periods=3, freq='MS')
    
    # Convert forecast to JSON format
    predictions = [{"month": date.strftime("%Y-%m"), "predicted_issue": value} for date, value in zip(forecast_dates, forecast)]
    return json.dumps(predictions)

if __name__ == "__main__":
    # Get input data from command line
    input_data = json.loads(sys.argv[1])
    print(predict_usage(input_data))
